@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
color
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Colors</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>colors</li>
        <li class="active">colors</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    color {{ $color->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $color->id }}</td></tr>
                     <tr><td>name</td><td>{{ $color['name'] }}</td></tr>
					<tr><td>type</td><td>{{ $color->typeName() }}</td></tr>
					<tr><td>percentage</td><td>{{ $color['percentage'] }}</td></tr>
					<tr><td>position</td><td>{{ $color['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop