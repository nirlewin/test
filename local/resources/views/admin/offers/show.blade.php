@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
offer
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Offers</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>offers</li>
        <li class="active">offers</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    offer {{ $offer->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $offer->id }}</td></tr>
                     <tr><td>buyerId</td><td>{{ $offer['buyerId'] }}</td></tr>
					<tr><td>sellerId</td><td>{{ $offer['sellerId'] }}</td></tr>
					<tr><td>diamondId</td><td>{{ $offer['diamondId'] }}</td></tr>
					<tr><td>rapBelow</td><td>{{ $offer['rapBelow'] }}</td></tr>
					<tr><td>userPrice</td><td>{{ $offer['userPrice'] }}</td></tr>
					<tr><td>status</td><td>{{ $offer['status'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop