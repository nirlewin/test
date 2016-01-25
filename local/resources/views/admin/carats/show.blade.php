@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
carat
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Carats</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>carats</li>
        <li class="active">carats</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    carat {{ $carat->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $carat->id }}</td></tr>
                     <tr><td>from</td><td>{{ $carat['from'] }}</td></tr>
					<tr><td>to</td><td>{{ $carat['to'] }}</td></tr>
					<tr><td>percentage</td><td>{{ $carat['percentage'] }}</td></tr>
					<tr><td>position</td><td>{{ $carat['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop