@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
offers List
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
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Offers List
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <div class="">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr class="filters">
                                <th>ID</th>
                                <th>Buyer</th>
                                <th>Seller</th>
                                <th>DiamondId</th>
                                <th>RapBelow</th>
                                <th>UserPrice</th>
                                <th>Status</th>
                                <th>create Time</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($offers as $offer)
                            <tr>
                                <td>{{{ $offer->id }}}</td>
                                <td>{{{ $offer->buyer->fullName }}}</td>
                                    <td>{{{ $offer->seller->fullName }}}</td>
                                    <td>{{{ $offer->diamondId }}}
                                        <a href="{{ route('admin.diamonds.show', $offer->diamondId) }}">
                                            <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view offer"></i>
                                        </a></td>
                                    <td>{{{ $offer->rapBelow }}}%</td>
                                    <td>{{{ $offer->userPrice }}}$</td>
                                    <td>{{{ $offer->statusName() }}}</td>
                                <td>{{{ $offer->createTime }}}</td>
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
