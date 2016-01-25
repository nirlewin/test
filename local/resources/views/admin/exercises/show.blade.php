@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
exercise
@parent
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
        <li class="active">exercises</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    exercise {{ $exercise->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $exercise->id }}</td></tr>
                     <tr><td>workout</td><td>{{ $exercise->workout->title }}</td></tr>
					<tr><td>title</td><td>{{ $exercise['title'] }}</td></tr>
                    <tr><td>image</td><td>@if($exercise['image']) <a href="{{ url($exercise['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>youtubeIdentifier</td><td>{{ $exercise['youtubeIdentifier'] }}
                            <a href="https://www.youtube.com/watch?v={{{ $exercise->youtubeIdentifier }}}" target="_blank">
                                <i class="livicon" data-name="eye-open" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view exercise"></i>
                            </a></td></tr>
					<tr><td>minutes</td><td>{{ $exercise['minutes'] }}</td></tr>
					<tr><td>calories</td><td>{{ $exercise['calories'] }}</td></tr>
					<tr><td>level</td><td>{{ $exercise->level->title }}</td></tr>
					<tr><td>likes</td><td>{{ $exercise['likes'] }}</td></tr>
					<tr><td>markTitle1</td><td>{{ $exercise['markTitle1'] }}</td></tr>
					<tr><td>markTitle2</td><td>{{ $exercise['markTitle2'] }}</td></tr>
					<tr><td>showAd</td><td>{{{ \App\Entity::yesOrNo($exercise->showAd) }}}</td></tr>
					<tr><td>publish</td><td>{{{ \App\Entity::yesOrNo($exercise->publish) }}}</td></tr>
					<tr><td>position</td><td>{{ $exercise['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop