@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
faq
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Faqs</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>faqs</li>
        <li class="active">faqs</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    faq {{ $faq->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $faq->id }}</td></tr>
                     <tr><td>question</td><td>{{ $faq['question'] }}</td></tr>
					<tr><td>answer</td><td>{{ $faq['answer'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</section>
@stop