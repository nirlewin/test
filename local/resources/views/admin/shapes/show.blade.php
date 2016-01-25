@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
shape
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Shapes</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>shapes</li>
        <li class="active">shapes</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    shape {{ $shape->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $shape->id }}</td></tr>
                     <tr><td>name</td><td>{{ $shape['name'] }}</td></tr>
					<tr><td>image</td><td>@if($shape['image']) <a href="{{ url($shape['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>percentage</td><td>{{ $shape['percentage'] }}</td></tr>
					<tr><td>position</td><td>{{ $shape['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop