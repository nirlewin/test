@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
usersnews List
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.colReorder.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.scroller.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.tableTools.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/extensions/bootstrap/dataTables.bootstrap.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css">
@stop

{{-- Page content --}}
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
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Usersnews List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.usersnews.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <div class="">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr class="filters">
                                <th>ID</th>
                                <th>SerialNumber</th>
                                <th>FullName</th>
                                <th>CompanyName</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>HaveAds</th>
                                <th>Create Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($usersnews as $usersnew)
                            <tr>
                                <td>{{{ $usersnew->id }}}</td>
                                <td>{{{ $usersnew->serialNumber }}}</td>
                                <td>{{{ $usersnew->fullName }}}</td>
                                <td>{{{ $usersnew->companyName }}}</td>
                                <td>{{{ $usersnew->email }}}</td>
                                <td>{{{ $usersnew->address }}}</td>
                                <td>@if($usersnew->country) {{{ $usersnew->country->name }}} @endif</td>
                                <td>{{{ $usersnew->phone }}}</td>
                                <td>{{{ \App\Entity::yesOrNo($usersnew->haveAds) }}}</td>
                                <td>{{{ $usersnew->createTime }}}</td>
                                <td>
                                    <a href="{{ route('admin.usersnews.show', $usersnew->id) }}">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view usersnew"></i>
                                    </a>
                                    <a href="{{ route('admin.usersnews.edit', $usersnew->id) }}">
                                        <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit usersnew"></i>
                                    </a>
                                    <a href="{{ route('admin.usersnews.confirm-delete', $usersnew->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete usersnew"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
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

<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.tableTools.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/extensions/bootstrap/dataTables.bootstrap.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>

@stop
