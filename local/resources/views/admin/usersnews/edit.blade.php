@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a usersnew
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
<!--end of page level css-->
@stop

@section('content')
<section class="content-header">
    <h1>Usersnews</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>usersnews</li>
        <li class="active">Create New usersnew</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit usersnew
                    </h4>
                </div>
                <div class="panel-body">
                     @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($usersnew, ['method' => 'PATCH', 'action' => ['UsersnewsController@update', $usersnew->id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('serialNumber', 'Serialnumber: ') !!}
                        {!! Form::text('serialNumber', null, ['class' => 'form-control', 'readonly']) !!}
                    </div><div class="form-group">
                        {!! Form::label('fullName', 'Fullname: ') !!}
                        {!! Form::text('fullName', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('companyName', 'Companyname: ') !!}
                        {!! Form::text('companyName', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('email', 'Email: ') !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('address', 'Address: ') !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('countryId', 'Country: ') !!}
                        {!! Form::select('countryId', $countries , Input::old('countryId',$usersnew->countryId), array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Phone: ') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-sm-12 control-label">Image</label>
                        <div class="col-sm-12">
                            <div class="fileinput @if($usersnew->image) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 400px; height: 400px;">
                                    <img src="http://placehold.it/800x800" alt="image">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 400px;">
                                    <img src="{!! url($usersnew->image) !!}" alt="image">
                                </div>
                                <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input id="image" name="image" type="file" class="form-control" />
                                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('haveAds', 'Haveads: ') !!}
                        {!! Form::checkbox('haveAds', 'on', $usersnew->haveAds == 1 ? true : false) !!}
                    </div><div class="form-group">
                        {!! Form::label('notifyForNewDiamonds', 'Notifyfornewdiamonds: ') !!}
                        {!! Form::checkbox('notifyForNewDiamonds', 'on', $usersnew->notifyForNewDiamonds == 1 ? true : false) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
@stop