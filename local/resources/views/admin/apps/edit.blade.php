@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a app
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Apps</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>apps</li>
        <li class="active">Create New app</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit app
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

                    {!! Form::model($app, ['method' => 'PATCH', 'action' => ['AppsController@update', $app->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title: ') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('bundle_id', 'Bundle Id: ') !!}
                        {!! Form::text('bundle_id', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('apple_id', 'Apple Id: ') !!}
                        {!! Form::text('apple_id', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('store_link', 'Store Link: ') !!}
                        {!! Form::text('store_link', null, ['class' => 'form-control']) !!}
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