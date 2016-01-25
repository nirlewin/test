@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
contact
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Contacts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>contacts</li>
        <li class="active">contacts</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    contact {{ $contact->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $contact->id }}</td></tr>
                     <tr><td>departmentId</td><td>{{ $contact['departmentId'] }}</td></tr>
					<tr><td>userId</td><td>{{ $contact['userId'] }}</td></tr>
					<tr><td>text</td><td>{{ $contact['text'] }}</td></tr>
					<tr><td>position</td><td>{{ $contact['position'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop