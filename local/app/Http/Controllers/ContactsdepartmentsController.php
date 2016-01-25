<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contactsdepartment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Input;
use Config;
use File;

class ContactsdepartmentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contactsdepartments = Contactsdepartment::latest()->get();
		return view('admin.contactsdepartments.index', compact('contactsdepartments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.contactsdepartments.create');
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
        }

        if(isset(Contactsdepartment::$boolean)) {
            foreach(contactsdepartment::$boolean as $field) {
                if(isset($insert[$field]) && $insert[$field] == "on") {
                    $insert[$field] = 1;
                }
            }
        }

		contactsdepartment::create($insert);
		return redirect('admin/contactsdepartments')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contactsdepartment = Contactsdepartment::findOrFail($id);
		return view('admin.contactsdepartments.show', compact('contactsdepartment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contactsdepartment = Contactsdepartment::findOrFail($id);
		return view('admin.contactsdepartments.edit', compact('contactsdepartment'));
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
		$contactsdepartment = Contactsdepartment::findOrFail($id);

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
            if(File::exists(Config::get('app.path') . $contactsdepartment->image))
            {
                File::delete(Config::get('app.path') . $contactsdepartment->image);
            }

            $update['image'] = $safeName ? $folderName.$safeName : '';
        }

        if(isset(Contactsdepartment::$boolean)) {
            foreach(Contactsdepartment::$boolean as $field) {
                if(isset($update[$field]) && $update[$field] == "on") {
                    $update[$field] = 1;
                } else {
                    $update[$field] = 0;
                }
            }
        }

		$contactsdepartment->update($update);
		return redirect('admin/contactsdepartments')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Contactsdepartment.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.contactsdepartments.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Contactsdepartment.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$contactsdepartment = Contactsdepartment::destroy($id);

            // Redirect to the group management page
            return redirect('admin/contactsdepartments')->with('success', Lang::get('message.success.delete'));

    	}

}