<?php namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usersnew;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Input;
use Config;
use File;
use Validator;
use GuzzleHttp\Client;

class UsersnewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usersnews = Usersnew::latest()->get();
		return view('admin.usersnews.index', compact('usersnews'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $countries = $this->countries();
        return view('admin.usersnews.create', compact('countries'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        $insert = $request->all();

        $validator = Validator::make($insert, [
            'email' => 'unique:d2c_users',
            'phone' => 'unique:d2c_users',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $client = new Client(['verify' => false]);

        $res = $client->request('POST', 'https://www.diamonds-dmc.com/api/v1.1/users/generateSerialNumber', [
            'form_params' => [
                'type' => $insert['type']
            ]
        ]);

        $insert['serialNumber'] = json_decode($res->getBody())->message;

        $insert['haveAds'] = $insert['type'] ==  "guest" ? 1 : 0;
        unset($insert['type']);

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

        if(isset(Usersnew::$boolean)) {
            foreach(usersnew::$boolean as $field) {
                if(isset($insert[$field]) && $insert[$field] == "on") {
                    $insert[$field] = 1;
                }
            }
        }

		usersnew::create($insert);
		return redirect('admin/usersnews')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersnew = Usersnew::findOrFail($id);
		return view('admin.usersnews.show', compact('usersnew'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $countries = $this->countries();
		$usersnew = Usersnew::findOrFail($id);
		return view('admin.usersnews.edit', compact('usersnew','countries'));
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
		$usersnew = Usersnew::findOrFail($id);

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
            if(File::exists(Config::get('app.path') . $usersnew->image))
            {
                File::delete(Config::get('app.path') . $usersnew->image);
            }

            $update['image'] = $safeName ? $folderName.$safeName : '';
        }

        if(isset(Usersnew::$boolean)) {
            foreach(Usersnew::$boolean as $field) {
                if(isset($update[$field]) && $update[$field] == "on") {
                    $update[$field] = 1;
                } else {
                    $update[$field] = 0;
                }
            }
        }

		$usersnew->update($update);
		return redirect('admin/usersnews')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Usersnew.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.usersnews.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Usersnew.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$usersnew = Usersnew::destroy($id);

            // Redirect to the group management page
            return redirect('admin/usersnews')->with('success', Lang::get('message.success.delete'));

    	}

    public function countries() {
        return Country::select("id","name")->lists("name", "id");
    }
}