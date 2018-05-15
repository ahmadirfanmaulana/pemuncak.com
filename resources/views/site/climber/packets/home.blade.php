@extends('layouts.app_climber')

@section('title')
  Packets
@endsection

@section('menu_' . $menu_active)
  active
@endsection

@section('clientAttr')
  ng-controller="Packet"
@endsection

@section('javascript')
  <script type="text/javascript" src="{{ asset('js/have/climber-packets.js') }}"></script>
@endsection

@section('breadcrumbs')
  <ol class="breadcrumb slim-breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('climber') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Packets</li>
  </ol>
@endsection

@section('content')
  <div class="col-md-12">

    <ul class="nav nav-activity-profile">
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.load('myPackets')"><i class="icon ion-ios-filing-outline tx-purple"></i> My Packets</a></li>
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.load()"><i class="icon ion-ios-filing-outline tx-purple"></i> More Packet</a></li>
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.create()"><i class="icon fa fa-plus tx-purple"></i> Add To My Packet</a></li>
    </ul>

    <div class="card card-table mg-t-20">
      <span ng-repeat="me in data.me">
        {{-- @{{ me.username }} --}}
        haha
      </span>
      <div class="card-header">
        <h6 class="slim-card-title">LIST MY PACKETS <span class="pull-right">All My Packets : <span class="text-info">@{{ data.count }} <i class="icon ion-ios-filing-outline"></i></span></h6>
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
        <table class="table mg-b-0 tx-13">
          <thead>
            <tr class="tx-10">
              <th></th>
              <th class="pointer" ng-click="data.orderBy = '-destination.name'" ng-if="data.orderBy == 'destination.name'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> Destination
              </th>
              <th class="pointer" ng-click="data.orderBy = 'destination.name'" ng-if="data.orderBy != 'destination.name'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> Destination
              </th>
              <th class="pointer text-center" ng-click="data.orderBy = '-count_adults'" ng-if="data.orderBy == 'count_adults'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> Adults
              </th>
              <th class="pointer text-center" ng-click="data.orderBy = 'count_adults'" ng-if="data.orderBy != 'count_adults'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> Adults
              </th>
              <th class="pointer text-center" ng-click="data.orderBy = '-count_kids'" ng-if="data.orderBy == 'count_kids'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> Kids
              </th>
              <th class="pointer text-center" ng-click="data.orderBy = 'count_kids'" ng-if="data.orderBy != 'count_kids'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> Kids
              </th>
              <th class="pointer text-right" ng-click="data.orderBy = '-price'" ng-if="data.orderBy == 'price'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> Price
              </th>
              <th class="pointer text-right" ng-click="data.orderBy = 'price'" ng-if="data.orderBy != 'price'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> Price
              </th>
              <th class="pointer text-center" ng-click="data.orderBy = '-created_at'" ng-if="data.orderBy == 'created_at'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> Created Date
              </th>
              <th class="pointer text-center" ng-click="data.orderBy = 'created_at'" ng-if="data.orderBy != 'created_at'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> Created Date
              </th>
              <th class="pd-y-5 tx-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="row in data.fromDB | filter:data.search | limitTo:data.limit | orderBy:data.orderBy">
              <td class="pd-l-20">
                <img src="{{ asset('upload/img/destinations/poster') }}/@{{ row.destination.poster }}" class="wd-55" alt="Image">
              </td>
              <td class="valign-middle">
                @{{ row.destination.name }}
              </td>
              <td class="valign-middle text-center">
                @{{ row.count_adults }}
              </td>
              <td class="valign-middle text-center">
                @{{ row.count_kids }}
              </td>
              <td class="text-right valign-middle">
                @{{ row.price }}
              </td>
              <td class="text-center valign-middle">
                @{{ row.created_at }}
              </td>
              <td class="valign-middle tx-center">
                <a data-toggle="tooltip-warning" title="Edit @{{ row.title }} Post" href="#" class="tx-gray-600 tx-24" ng-click="action.edit.start(row)">
                  <i class="fa fa-pencil-square-o"></i>
                </a>
                <a data-toggle="tooltip-danger" title="Delete @{{ row.title }} Post" href="#" class="tx-danger-600 tx-24 mg-l-10" ng-click="action.trash.start(row)">
                  <i class="fa fa-trash-o"></i>
                </a>
                <a data-toggle="tooltip-indigo" title="Detail @{{ row.title }} Post" href="#" class="tx-primary-600 tx-24 mg-l-10" ng-click="action.trash.start(row)">
                  <i class="fa fa-share"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div>
  </div>
@endsection
