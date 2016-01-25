@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
usersnew
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Usersnews</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>usersnews</li>
        <li class="active">usersnews</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    usersnew {{ $usersnew->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $usersnew->id }}</td></tr>
                     <tr><td>serialNumber</td><td>{{ $usersnew['serialNumber'] }}</td></tr>
					<tr><td>fullName</td><td>{{ $usersnew['fullName'] }}</td></tr>
					<tr><td>companyName</td><td>{{ $usersnew['companyName'] }}</td></tr>
					<tr><td>email</td><td>{{ $usersnew['email'] }}</td></tr>
					<tr><td>address</td><td>{{ $usersnew['address'] }}</td></tr>
					<tr><td>countryId</td><td>{{ $usersnew['countryId'] }}</td></tr>
					<tr><td>phone</td><td>{{ $usersnew['phone'] }}</td></tr>
					<tr><td>image</td><td>@if($usersnew['image']) <a href="{{ url($usersnew['image']) }}" target="_blank">Current Image</a> @else No Image @endif</td></tr>
					<tr><td>agree</td><td>{{ $usersnew['agree'] }}</td></tr>
					<tr><td>haveAds</td><td>{{ $usersnew['haveAds'] }}</td></tr>
					<tr><td>notifyForNewDiamonds</td><td>{{ $usersnew['notifyForNewDiamonds'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop