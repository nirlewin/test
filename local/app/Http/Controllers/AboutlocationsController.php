<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aboutlocation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Input;
use Config;
use File;

class AboutlocationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$aboutlocations = Aboutlocation::latest()->get();
		return view('admin.aboutlocations.index', compact('aboutlocations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.aboutlocations.create');
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

        if(isset(Aboutlocation::$boolean)) {
            foreach(aboutlocation::$boolean as $field) {
                if(isset($insert[$field]) && $insert[$field] == "on") {
                    $insert[$field] = 1;
                }
            }
        }

		aboutlocation::create($insert);
		return redirect('admin/aboutlocations')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$aboutlocation = Aboutlocation::findOrFail($id);
		return view('admin.aboutlocations.show', compact('aboutlocation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$aboutlocation = Aboutlocation::findOrFail($id);
		return view('admin.aboutlocations.edit', compact('aboutlocation'));
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
		$aboutlocation = Aboutlocation::findOrFail($id);

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
            if(File::exists(Config::get('app.path') . $aboutlocation->image))
            {
                File::delete(Config::get('app.path') . $aboutlocation->image);
            }

            $update['image'] = $safeName ? $folderName.$safeName : '';
        }

        if(isset(Aboutlocation::$boolean)) {
            foreach(Aboutlocation::$boolean as $field) {
                if(isset($update[$field]) && $update[$field] == "on") {
                    $update[$field] = 1;
                } else {
                    $update[$field] = 0;
                }
            }
        }

		$aboutlocation->update($update);
		return redirect('admin/aboutlocations')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Aboutlocation.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.aboutlocations.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Aboutlocation.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$aboutlocation = Aboutlocation::destroy($id);

            // Redirect to the group management page
            return redirect('admin/aboutlocations')->with('success', Lang::get('message.success.delete'));

    	}

}