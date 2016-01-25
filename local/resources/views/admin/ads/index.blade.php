@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
ads List
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Ads</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>ads</li>
        <li class="active">ads</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Ads List
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Title</th>
								<th>Price</th>
								<th>ButtonText</th>
								<th>ButtonUrl</th>
								<th>ShowLabel</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($ads as $ad)
                        <tr>
                            <td>{{{ $ad->id }}}</td>
                            <td>{{{ $ad->title }}}</td>
                            <td>{{{ $ad->price }}}</td>
                            <td>{{{ $ad->buttonText }}}</td>
                            <td>{{{ $ad->buttonUrl }}}</td>
                            <td>{{{ \App\Entity::yesOrNo($ad->showLabel) }}}</td>
                            <td>
                                <a href="{{ route('admin.ads.show', $ad->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view ad"></i>
                                </a>
                                <a href="{{ route('admin.ads.edit', $ad->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit ad"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
