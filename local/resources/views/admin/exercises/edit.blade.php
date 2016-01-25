@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a exercise
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
    <h1>Exercises</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>exercises</li>
        <li class="active">Create New exercise</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit exercise
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

                    {!! Form::model($exercise, ['method' => 'PATCH', 'action' => ['ExercisesController@update', $exercise->id], 'enctype' => 'multipart/form-data']) !!}


                    <div class="form-group">
                        {!! Form::label('workout_id', 'Workout: ') !!}
                        {!! Form::select('workout_id', $workouts , Input::old('workout_id',$exercise->workout_id), array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('title', 'Title: ') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-12 control-label">Image</label>
                        <div class="col-sm-12">
                            <div class="fileinput @if($exercise->image) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 414px; height: 260px;">
                                    <img src="http://placehold.it/1242x780" alt="image">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 414px; max-height: 260px;">
                                    <img src="{!! url($exercise->image) !!}" alt="image">
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
                    </div><div class="form-group">
                        {!! Form::label('youtubeIdentifier', 'Youtubeidentifier: ') !!}
                        {!! Form::text('youtubeIdentifier', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('minutes', 'Minutes: ') !!}
                        {!! Form::text('minutes', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('calories', 'Calories: ') !!}
                        {!! Form::text('calories', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('level_id', 'Level: ') !!}
                        {!! Form::select('level_id', $levels , Input::old('level_id',$exercise->level_id), array('class' => 'form-control')) !!}
                    </div><div class="form-group">
                        {!! Form::label('likes', 'Likes: ') !!}
                        {!! Form::text('likes', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('markTitle1', 'Marktitle1: ') !!}
                        {!! Form::text('markTitle1', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('markTitle2', 'Marktitle2: ') !!}
                        {!! Form::text('markTitle2', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('', 'Show Ad: ') !!}
                        {!! Form::checkbox('showAd', 'on', $exercise->showAd == 1 ? true : false) !!}
                    </div><div class="form-group">
                        {!! Form::label('publish', 'Publish: ') !!}
                        {!! Form::checkbox('publish', 'on', $exercise->publish == 1 ? true : false) !!}
                    </div><div class="form-group">
                        {!! Form::label('position', 'Position: ') !!}
                        {!! Form::text('position', null, ['class' => 'form-control']) !!}
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