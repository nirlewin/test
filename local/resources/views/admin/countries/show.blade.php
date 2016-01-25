@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
country
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Countries</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>countries</li>
        <li class="active">countries</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    country {{ $country->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $country->id }}</td></tr>
                     <tr><td>name</td><td>{{ $country['name'] }}</td></tr>
					<tr><td>image</td><td>@if($country['image']) <a href="{{ url($country['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>position</td><td>{{ $country['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop