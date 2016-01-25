@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
app
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Apps</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>apps</li>
        <li class="active">apps</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    app {{ $app->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $app->id }}</td></tr>
                     <tr><td>title</td><td>{{ $app['title'] }}</td></tr>
					<tr><td>bundle_id</td><td>{{ $app['bundle_id'] }}</td></tr>
					<tr><td>apple_id</td><td>{{ $app['apple_id'] }}</td></tr>
					<tr><td>store_link</td><td>{{ $app['store_link'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop