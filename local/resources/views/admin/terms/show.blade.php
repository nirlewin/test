@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
term
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Terms</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>terms</li>
        <li class="active">terms</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    term {{ $term->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $term->id }}</td></tr>
                     <tr><td>text</td><td>{{ $term['text'] }}</td></tr>
					<tr><td>having_trouble_url</td><td>{{ $term['having_trouble_url'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop