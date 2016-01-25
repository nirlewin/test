@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
fluorescence
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Fluorescences</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>fluorescences</li>
        <li class="active">fluorescences</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    fluorescence {{ $fluorescence->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $fluorescence->id }}</td></tr>
                     <tr><td>name</td><td>{{ $fluorescence['name'] }}</td></tr>
					<tr><td>percentage</td><td>{{ $fluorescence['percentage'] }}</td></tr>
					<tr><td>position</td><td>{{ $fluorescence['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop