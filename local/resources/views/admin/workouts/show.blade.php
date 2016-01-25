@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
workout
@parent
@stop

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
        <li class="active">workouts</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    workout {{ $workout->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $workout->id }}</td></tr>
                    <tr><td>app</td><td>{{ $workout->app->title }}</td></tr>
                     <tr><td>title</td><td>{{ $workout['title'] }}</td></tr>
                    <tr><td>image</td><td>@if($workout['image']) <a href="{{ url($workout['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>totalMinutes</td><td>{{ $workout['totalMinutes'] }}</td></tr>
					<tr><td>totalCalories</td><td>{{ $workout['totalCalories'] }}</td></tr>
					<tr><td>totalLikes</td><td>{{ $workout['totalLikes'] }}</td></tr>
					<tr><td>publish</td><td>{{ $workout['publish'] }}</td></tr>
					<tr><td>position</td><td>{{ $workout['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop