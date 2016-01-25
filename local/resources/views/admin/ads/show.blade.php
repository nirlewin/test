@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
ad
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Ads</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>ads</li>
        <li class="active">ads</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    ad {{ $ad->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $ad->id }}</td></tr>
                     <tr><td>title</td><td>{{ $ad['title'] }}</td></tr>
					<tr><td>image</td><td>@if($ad['image']) <a href="{{ url($ad['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>price</td><td>{{ $ad['price'] }}</td></tr>
					<tr><td>buttonText</td><td>{{ $ad['buttonText'] }}</td></tr>
					<tr><td>buttonUrl</td><td>{{ $ad['buttonUrl'] }}</td></tr>
					<tr><td>showLabel</td><td>{{ $ad['showLabel'] }}</td></tr>
					<tr><td>position</td><td>{{ $ad['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop