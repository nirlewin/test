@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a offer
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
    <h1>Offers</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>offers</li>
        <li class="active">Create New offer</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit offer
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

                    {!! Form::model($offer, ['method' => 'PATCH', 'action' => ['OffersController@update', $offer->id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('buyerId', 'Buyerid: ') !!}
                        {!! Form::text('buyerId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('sellerId', 'Sellerid: ') !!}
                        {!! Form::text('sellerId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('diamondId', 'Diamondid: ') !!}
                        {!! Form::text('diamondId', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('rapBelow', 'Rapbelow: ') !!}
                        {!! Form::text('rapBelow', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('userPrice', 'Userprice: ') !!}
                        {!! Form::text('userPrice', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('status', 'Status: ') !!}
                        {!! Form::text('status', null, ['class' => 'form-control']) !!}
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