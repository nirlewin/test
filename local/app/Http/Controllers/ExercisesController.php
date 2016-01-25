<?php namespace App\Http\Controllers;

use App\App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Exercise;
use App\Level;
use App\Workout;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Input;
use Config;
use File;

class ExercisesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exercises = Exercise::orderBy("position", "asc")->get();
		return view('admin.exercises.index', compact('exercises'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $workouts = $this->appsAndWorkouts();
        $levels = $this->levels();
        return view('admin.exercises.create', compact('workouts','levels'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        $insert = $request->all();

        $safeName = false;
        //upload image
        if ($file = Input::file('image'))
        {
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension() ?: 'png';
            $folderName      = '/uploads/';
            $destinationPath = Config::get('app.path') . $folderName;
            $safeName        = time()."_".str_random(10).'.'.$extension;
            $file->move($destinationPath, $safeName);

            $insert['image'] = $safeName ? $folderName.$safeName : '';
        } else {
            $insert['image'] = "";
        }

        foreach(Exercise::$boolean as $field) {

            if(isset($insert[$field]) && $insert[$field] == "on") {
                $insert[$field] = 1;
            }

        }

		exercise::create($insert);
		return redirect('admin/exercises')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$exercise = Exercise::findOrFail($id);
		return view('admin.exercises.show', compact('exercise'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $workouts = $this->appsAndWorkouts();
        $levels = $this->levels();
		$exercise = Exercise::findOrFail($id);
		return view('admin.exercises.edit', compact('exercise','workouts','levels'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$exercise = Exercise::findOrFail($id);

        $update = $request->all();

        // is new image uploaded?
        if ($file = Input::file('image'))
        {
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension() ?: 'png';
            $folderName      = '/uploads/';
            $destinationPath = Config::get('app.path') . $folderName;
            $safeName        = time()."_".str_random(10).'.'.$extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if(File::exists(Config::get('app.path') . $exercise->image))
            {
                File::delete(Config::get('app.path') . $exercise->image);
            }

            $update['image'] = $safeName ? $folderName.$safeName : '';

        }


        foreach(Exercise::$boolean as $field) {
            if(isset($update[$field]) && $update[$field] == "on") {
                $update[$field] = 1;
            } else {
                $update[$field] = 0;
            }

        }

		$exercise->update($update);
		return redirect('admin/exercises')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Exercise.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.exercises.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Exercise.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$exercise = Exercise::destroy($id);

            // Redirect to the group management page
            return redirect('admin/exercises')->with('success', Lang::get('message.success.delete'));

    	}


    public function workouts() {
        return Workout::select("id","title")->lists("title", "id");
    }
    public function levels() {
        return Level::select("id","title")->lists("title", "id");
    }

    public function apps() {
        return App::select("id","title")->lists("title", "id");
    }

    public function appsAndWorkouts() {
        $apps = App::with("workouts")->get();

        $newApps = array();

        foreach($apps as $app) {
            $newApps[$app->title] = $app->workouts->lists("title","id")->toArray();
        }
        return $newApps;
    }
}