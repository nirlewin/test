@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
user
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>users</li>
        <li class="active">users</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    user {{ $user->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $user->id }}</td></tr>
                     <tr><td>serialNumber</td><td>{{ $user['serialNumber'] }}</td></tr>
					<tr><td>fullName</td><td>{{ $user['fullName'] }}</td></tr>
					<tr><td>companyName</td><td>{{ $user['companyName'] }}</td></tr>
					<tr><td>email</td><td>{{ $user['email'] }}</td></tr>
					<tr><td>address</td><td>{{ $user['address'] }}</td></tr>
					<tr><td>countryId</td><td>{{ $user['countryId'] }}</td></tr>
					<tr><td>phone</td><td>{{ $user['phone'] }}</td></tr>
					<tr><td>image</td><td>@if($user['image']) <a href="{{ url($user['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>agree</td><td>{{ $user['agree'] }}</td></tr>
					<tr><td>haveAds</td><td>{{ $user['haveAds'] }}</td></tr>
					<tr><td>notifyForNewDiamonds</td><td>{{ $user['notifyForNewDiamonds'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop