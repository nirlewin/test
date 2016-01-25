@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
about
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
        <li class="active">abouts</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    about {{ $about->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $about->id }}</td></tr>
                     <tr><td>phone</td><td>{{ $about['phone'] }}</td></tr>
					<tr><td>email</td><td>{{ $about['email'] }}</td></tr>
					<tr><td>address</td><td>{{ $about['address'] }}</td></tr>
					<tr><td>position</td><td>{{ $about['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop