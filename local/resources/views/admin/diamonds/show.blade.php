@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
diamond
@parent
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
        <li class="active">diamonds</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    diamond {{ $diamond->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $diamond->id }}</td></tr>
                     <tr><td>userId</td><td>{{ $diamond->user->fullName }}</td></tr>
					<tr><td>sku</td><td>{{ $diamond['sku'] }}</td></tr>
					<tr><td>carat</td><td>{{ $diamond['carat'] }}</td></tr>
                    <tr><td>shapeId</td><td>@if($option = $diamond->shape) {{ $option->name }} @endif</td></tr>
                    <tr><td>colorId</td><td>@if($option = $diamond->color) {{ $option->name }} @endif</td></tr>
                    <tr><td>reportId</td><td>@if($option = $diamond->report) {{ $option->name }} @endif</td></tr>
					<tr><td>reportCode</td><td>{{ $diamond['reportCode'] }}</td></tr>
					<tr><td>reportImage</td><td>@if($diamond['reportImage']) <a href="{{ url($diamond['reportImage']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
                    <tr><td>clarityId</td><td>@if($option = $diamond->clarity) {{ $option->name }} @endif</td></tr>
                    <tr><td>cutId</td><td>@if($option = $diamond->cut) {{ $option->name }} @endif</td></tr>
                    <tr><td>fluorescenceId</td><td>@if($option = $diamond->fluorescence) {{ $option->name }} @endif</td></tr>
                    <tr><td>symmetryId</td><td>@if($option = $diamond->symmetry) {{ $option->name }} @endif</td></tr>
                    <tr><td>polishId</td><td>@if($option = $diamond->polish) {{ $option->name }} @endif</td></tr>
                    <tr><td>countryId</td><td>@if($option = $diamond->country) {{ $option->name }} @endif</td></tr>
					<tr><td>image</td><td>@if($diamond['image']) <a href="{{ url($diamond['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>listPrice</td><td>{{ $diamond['listPrice'] }}$</td></tr>
					<tr><td>rapBelow</td><td>{{ $diamond['rapBelow'] }}%</td></tr>
					<tr><td>totalPrice</td><td>{{ $diamond['totalPrice'] }}$</td></tr>
                    <tr><td>shareImage</td><td>@if($diamond['shareImage']) <a href="{{ url($diamond['shareImage']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
                    <tr><td>video360</td><td>@if($diamond['video360']) <a href="{{ url($diamond['video360']) }}" target="_blank">Current Video</a> @else No Video @endif</td></tr>
                    <tr><td>video360_mp4</td><td>@if($diamond['video360_mp4']) <a href="{{ url($diamond['video360_mp4']) }}" target="_blank">Current Video</a> @else No Video @endif</td></tr>
					<tr><td>deleted</td><td>{{ \App\Entity::yesOrNo($diamond['deleted']) }}</td></tr>
					<tr><td>published</td><td>{{ \App\Entity::yesOrNo($diamond['published']) }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop