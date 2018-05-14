@extends('layouts.app_administrator')

@section('title')
  Steps
@endsection

@section('menu_' . $menu_active)
  active
@endsection

@section('clientAttr')
  ng-controller="Step"
@endsection

@section('javascript')
  <script type="text/javascript" src="{{ asset('js/have/steps.js') }}"></script>
@endsection

@section('content')
  <div class="col-md-12">
    <ul class="nav nav-activity-profile">
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.load()"><i class="icon fa fa-refresh tx-purple"></i> Refresh Posts</a></li>
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.create.start()"><i class="icon ion-document-text tx-success"></i> Add an post</a></li>
    </ul>
    <div class="card card-table mg-t-20">
      <div class="card-header">
        <h6 class="slim-card-title">LIST STEPS <span class="pull-right">All Steps : <span class="text-info">@{{ data.count }} <i class="icon ion ion-android-done-all"></i></span></h6>
      </div><!-- card-header -->
      <div class="card-header">
        <span class="pull-left">
          <select class="form-control" name="" ng-model="data.limit" ng-options="x for x in data.limitSelect"></select>
        </span>
        <span class="pull-right">
          <input type="search" name="" value="" ng-model="data.search" placeholder="Search..." class="form-control">
        </span>
      </div><!-- card-header -->
      <div class="table-responsive">
          <table id="" class="table  mg-b-0 tx-13">
            <thead>
              <tr>
                <th class="wd-15p" colspan="2">Destination</th>
                <th class="text-center wd-15p">Level</th>
                <th class="wd-15p">Description</th>
                <th class="text-center wd-15p">Sum Point</th>
                <th class="text-center wd-15p">Sub Point</th>
                <th class="text-center wd-25p">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="row in data.fromDB | limitTo:data.limit | orderBy:data.orderBy | filter:data.search">
                <td class="valign-middle">
                  <img src="{{ asset('upload/img/destinations/poster') }}/@{{ row.destination.poster }}" alt="" class="wd-55">
                </td>
                <td class="valign-middle">
                  @{{ row.destination.name }}
                </td>
                <td class="valign-middle text-center">
                  @{{ row.level }}
                </td>
                <td class="valign-middle">
                  @{{ row.description }}
                </td>
                <td class="valign-middle text-center">
                  @{{ row.sum_point }}
                </td>
                <td class="valign-middle text-center">
                  @{{ row.sub_point }}
                </td>

                <td class="valign-middle text-center">
                  <a data-toggle="tooltip-warning" title="Edit @{{ row.title }} Post" href="#" class="tx-gray-600 tx-24" ng-click="action.edit.start(row)"><i class="fa fa-pencil-square-o"></i></a>
                  <a data-toggle="tooltip-danger" title="Delete @{{ row.title }} Post" href="#" class="tx-danger-600 tx-24 mg-l-10" ng-click="action.trash.start(row)"><i class="fa fa-trash-o"></i></a>
                  <a data-toggle="tooltip-indigo" title="Detail @{{ row.title }} Post" href="#" class="tx-primary-600 tx-24 mg-l-10" ng-click="action.trash.start(row)"><i class="fa fa-share"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-wrapper -->
    </div>
  </div>
@endsection


@section('modal')
  {{-- modal form --}}
  @include('site.admin.steps.create')
  {{-- modal edit --}}
  @include('site.admin.steps.edit')
  {{-- modal question --}}
  @include('site.admin.steps.delete')
@endsection
