<?php namespace App\Http\Controllers;

use App\App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Workout;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Input;
use Config;
use File;

class WorkoutsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $workouts = Workout::orderBy("position", "asc")->get();
        return view('admin.workouts.index', compact('workouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $apps = $this->apps();
        return view('admin.workouts.create', compact('apps'));
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

        foreach(Workout::$boolean as $field) {

            if(isset($insert[$field]) && $insert[$field] == "on") {
                $insert[$field] = 1;
            }

        }

        workout::create($insert);
        return redirect('admin/workouts')->with('success', Lang::get('message.success.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $workout = Workout::findOrFail($id);
        return view('admin.workouts.show', compact('workout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $apps = $this->apps();
        $workout = Workout::findOrFail($id);
        return view('admin.workouts.edit', compact('workout','apps'));
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
        $workout = Workout::findOrFail($id);

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
            if(File::exists(Config::get('app.path') . $workout->image))
            {
                File::delete(Config::get('app.path') . $workout->image);
            }

            $update['image'] = $safeName ? $folderName.$safeName : '';

        }


        foreach(Workout::$boolean as $field) {
            if(isset($update[$field]) && $update[$field] == "on") {
                $update[$field] = 1;
            } else {
                $update[$field] = 0;
            }

        }

        $workout->update($update);
        return redirect('admin/workouts')->with('success', Lang::get('message.success.update'));
    }

    /**
     * Delete confirmation for the given Workout.
     *
     * @param  int      $id
     * @return View
     */
    public function getModalDelete($id = null)
    {
        $error = '';
        $model = '';
        $confirm_route =  route('admin.workouts.delete',['id'=>$id]);
        return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    }

    /**
     * Delete the given Workout.
     *
     * @param  int      $id
     * @return Redirect
     */
    public function getDelete($id = null)
    {
        $workout = Workout::destroy($id);

        // Redirect to the group management page
        return redirect('admin/workouts')->with('success', Lang::get('message.success.delete'));

    }

    public function apps() {
        return App::select("id","title")->lists("title", "id");
    }
}