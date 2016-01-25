@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
report
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Reports</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>reports</li>
        <li class="active">reports</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    report {{ $report->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $report->id }}</td></tr>
                     <tr><td>name</td><td>{{ $report['name'] }}</td></tr>
					<tr><td>site</td><td>{{ $report['site'] }}</td></tr>
					<tr><td>image</td><td>@if($report['image']) <a href="{{ url($report['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>percentage</td><td>{{ $report['percentage'] }}</td></tr>
					<tr><td>position</td><td>{{ $report['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop