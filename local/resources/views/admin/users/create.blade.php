@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Create New user
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
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>users</li>
        <li class="active">Create New user</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Create a new user
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

                    {!! Form::open(['url' => 'admin/users', 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('serialNumber', 'Serialnumber: ') !!}
                        {!! Form::text('serialNumber', null, ['class' => 'form-control']) !!}
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
                    </div><div class="form-group">
                        {!! Form::label('countryId', 'Countryid: ') !!}
                        {!! Form::text('countryId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('phone', 'Phone: ') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('image', 'Image: ') !!}
                        {!! Form::text('image', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('agree', 'Agree: ') !!}
                        {!! Form::text('agree', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('haveAds', 'Haveads: ') !!}
                        {!! Form::text('haveAds', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('notifyForNewDiamonds', 'Notifyfornewdiamonds: ') !!}
                        {!! Form::text('notifyForNewDiamonds', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href="{{ route('admin.users.index') }}">
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