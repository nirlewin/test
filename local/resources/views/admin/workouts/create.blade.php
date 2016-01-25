@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New workout
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
<!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Workouts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>workouts</li>
        <li class="active">Create New workout</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new workout
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

                    {!! Form::open(['url' => 'admin/workouts', 'enctype' => 'multipart/form-data']) !!}


                    <div class="form-group">
                        {!! Form::label('app_id', 'App: ') !!}
                        {!! Form::select('app_id', $apps ,'', array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('title', 'Title: ') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>


                    <div class="form-group">
                        <label for="image" class="col-sm-12 control-label">Image</label>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 414px; height: 233px;">
                                    <img src="http://placehold.it/1242x700" alt="image">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 414px; max-height: 233px;"></div>
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
                        {!! Form::label('totalMinutes', 'Totalminutes: ') !!}
                        {!! Form::text('totalMinutes', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('totalCalories', 'Totalcalories: ') !!}
                        {!! Form::text('totalCalories', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('totalLikes', 'Totallikes: ') !!}
                        {!! Form::text('totalLikes', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('publish', 'Publish: ') !!}
                        {!! Form::checkbox('publish', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('position', 'Position: ') !!}
                        {!! Form::text('position', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href="{{ route('admin.workouts.index') }}">
                                @lang('button.cancel')
                            </a>
                            <button type="submit" class="btn btn-success">
                                @lang('button.save')
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
@stop