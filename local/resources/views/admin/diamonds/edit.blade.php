@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a diamond
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
    <h1>Diamonds</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>diamonds</li>
        <li class="active">Create New diamond</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit diamond
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

                    {!! Form::model($diamond, ['method' => 'PATCH', 'action' => ['DiamondsController@update', $diamond->id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('userId', 'Userid: ') !!}
                        {!! Form::text('userId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('sku', 'Sku: ') !!}
                        {!! Form::text('sku', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('carat', 'Carat: ') !!}
                        {!! Form::text('carat', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('shapeId', 'Shapeid: ') !!}
                        {!! Form::text('shapeId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('colorId', 'Colorid: ') !!}
                        {!! Form::text('colorId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('reportId', 'Reportid: ') !!}
                        {!! Form::text('reportId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('reportCode', 'Reportcode: ') !!}
                        {!! Form::text('reportCode', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('reportImage', 'Reportimage: ') !!}
                        {!! Form::text('reportImage', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('clarityId', 'Clarityid: ') !!}
                        {!! Form::text('clarityId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('cutId', 'Cutid: ') !!}
                        {!! Form::text('cutId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('fluorescenceId', 'Fluorescenceid: ') !!}
                        {!! Form::text('fluorescenceId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('symmetryId', 'Symmetryid: ') !!}
                        {!! Form::text('symmetryId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('polishId', 'Polishid: ') !!}
                        {!! Form::text('polishId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('countryId', 'Countryid: ') !!}
                        {!! Form::text('countryId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('image', 'Image: ') !!}
                        {!! Form::text('image', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('listPrice', 'Listprice: ') !!}
                        {!! Form::text('listPrice', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('rapBelow', 'Rapbelow: ') !!}
                        {!! Form::text('rapBelow', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('totalPrice', 'Totalprice: ') !!}
                        {!! Form::text('totalPrice', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('shareImage', 'Shareimage: ') !!}
                        {!! Form::text('shareImage', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('video360', 'Video360: ') !!}
                        {!! Form::text('video360', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('video360_mp4', 'Video360 Mp4: ') !!}
                        {!! Form::text('video360_mp4', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('sold', 'Sold: ') !!}
                        {!! Form::text('sold', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('deleted', 'Deleted: ') !!}
                        {!! Form::text('deleted', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('published', 'Published: ') !!}
                        {!! Form::text('published', null, ['class' => 'form-control']) !!}
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