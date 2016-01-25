@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a about
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Abouts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>abouts</li>
        <li class="active">Create New about</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit about
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

                    {!! Form::model($about, ['method' => 'PATCH', 'action' => ['AboutsController@update', $about->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone: ') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('email', 'Email: ') !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('address', 'Address: ') !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
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