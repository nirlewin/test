@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
polish
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Polishs</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>polishs</li>
        <li class="active">polishs</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    polish {{ $polish->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $polish->id }}</td></tr>
                     <tr><td>name</td><td>{{ $polish['name'] }}</td></tr>
					<tr><td>percentage</td><td>{{ $polish['percentage'] }}</td></tr>
					<tr><td>position</td><td>{{ $polish['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop