<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Report;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Input;
use Config;
use File;

class ReportsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reports = Report::latest()->get();
		return view('admin.reports.index', compact('reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.reports.create');
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

        if(isset(Report::$boolean)) {
            foreach(report::$boolean as $field) {
                if(isset($insert[$field]) && $insert[$field] == "on") {
                    $insert[$field] = 1;
                }
            }
        }

		report::create($insert);
		return redirect('admin/reports')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$report = Report::findOrFail($id);
		return view('admin.reports.show', compact('report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$report = Report::findOrFail($id);
		return view('admin.reports.edit', compact('report'));
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
		$report = Report::findOrFail($id);

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
            if(File::exists(Config::get('app.path') . $report->image))
            {
                File::delete(Config::get('app.path') . $report->image);
            }

            $update['image'] = $safeName ? $folderName.$safeName : '';
        }

        if(isset(Report::$boolean)) {
            foreach(Report::$boolean as $field) {
                if(isset($update[$field]) && $update[$field] == "on") {
                    $update[$field] = 1;
                } else {
                    $update[$field] = 0;
                }
            }
        }

		$report->update($update);
		return redirect('admin/reports')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Report.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.reports.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Report.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$report = Report::destroy($id);

            // Redirect to the group management page
            return redirect('admin/reports')->with('success', Lang::get('message.success.delete'));

    	}

}