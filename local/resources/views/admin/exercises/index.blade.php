@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
exercises List
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
    <h1>Exercises</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>exercises</li>
        <li class="active">exercises</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Exercises List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.exercises.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <div class="">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr class="filters">
                                <th>ID</th>
                                <th>App</th>
                                <th>Workout</th>
                                <th>Title</th>
                                <th>YoutubeIdentifier</th>
                                <th>Minutes</th>
                                <th>Calories</th>
                                <th>Level</th>
                                <th>Likes</th>
                                <th>MarkTitle1</th>
                                <th>MarkTitle2</th>
                                <th>ShowAd</th>
                                <th>Publish</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($exercises as $exercise)
                            <tr>
                                <td>{{{ $exercise->id }}}</td>
                                <td>{{{ $exercise->workout->app->title }}}</td>
                                <td>{{{ $exercise->workout->title }}}</td>
                                <td>{{{ $exercise->title }}}</td>
                                <td>{{{ $exercise->youtubeIdentifier }}}
                                    <a href="https://www.youtube.com/watch?v={{{ $exercise->youtubeIdentifier }}}" target="_blank">
                                        <i class="livicon" data-name="eye-open" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view exercise"></i>
                                    </a></td>
                                <td>{{{ $exercise->minutes }}}</td>
                                <td>{{{ $exercise->calories }}}</td>
                                <td>{{{ $exercise->level->title }}}</td>
                                <td>{{{ $exercise->likes }}}</td>
                                <td>{{{ $exercise->markTitle1 }}}</td>
                                <td>{{{ $exercise->markTitle2 }}}</td>
                                <td>{{{ \App\Entity::yesOrNo($exercise->showAd) }}}</td>
                                <td>{{{ \App\Entity::yesOrNo($exercise->publish) }}}</td>
                                <td>{{{ $exercise->position }}}</td>
                                <td>
                                    <a href="{{ route('admin.exercises.show', $exercise->id) }}">
                                        <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view exercise"></i>
                                    </a>
                                    <a href="{{ route('admin.exercises.edit', $exercise->id) }}">
                                        <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit exercise"></i>
                                    </a>
                                    <a href="{{ route('admin.exercises.confirm-delete', $exercise->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete exercise"></i>
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
