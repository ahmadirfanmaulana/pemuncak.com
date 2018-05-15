@extends('layouts.app_administrator')

@section('title')
  Packet Items
@endsection

@section('menu_' . $menu_active)
  active
@endsection

@section('breadcrumbs')
  <ol class="breadcrumb slim-breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Packet Items</li>
  </ol>
@endsection

@section('clientAttr')
  ng-controller="PacketItem"
@endsection

@section('javascript')
  <script type="text/javascript" src="{{ asset('js/have/packet-items.js') }}"></script>
@endsection

@section('content')
  <div class="col-md-12">
    <ul class="nav nav-activity-profile">
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.load()"><i class="icon fa fa-refresh tx-purple"></i> Refresh Packet Item</a></li>
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.save.start()"><i class="icon ion-document-text tx-success"></i> Add an Packet Item</a></li>
    </ul>
    <div class="card mg-t-20 card-table">
      <div class="card-header">
        <h6 class="slim-card-title valign-bottom">LIST PACKET ITEMS <span class="pull-right">All Packet Item : <span class="text-info">@{{ data.count }} <i class="icon ion-filing"></i></span> </span> </h6>
      </div><!-- card-header -->
      <div class="card-header">
        <h6 class="slim-card-title valign-bottom">
          <span class="pull-left">
            <select class="form-control" name="" ng-model="data.limit" ng-options="x for x in data.limitSelect">
              {{-- <option value="5">5</option>
              <option value="10">10</option>
              <option value="20">20</option> --}}
            </select>
          </span>
          <span class="pull-right">
            <input type="search" name="" value="" class="form-control" placeholder="Search..." ng-model="data.search">
          </span>
        </h6>
      </div><!-- card-header -->
        <div class="table-responsive">
            <table id="" class="table mg-b-0 tx-13">
              <thead>
                <tr class="tx-10">
                  <th class="text-center wd-15p">Icon</th>
                  {{-- name --}}
                  <th class="wd-15p pointer" ng-click="data.orderBy = '-name'" ng-if="data.orderBy == 'name'">
                    <i class="fa fa-sort-alpha-asc m-r-10"></i> Name
                  </th>
                  <th class="wd-15p pointer" ng-click="data.orderBy = 'name'" ng-if="data.orderBy != 'name'">
                    <i class="fa fa-sort-alpha-desc m-r-10"></i> Name
                  </th>
                  {{-- about item --}}
                  <th class="wd-15p pointer" ng-click="data.orderBy = '-about_item'" ng-if="data.orderBy == 'about_item'">
                    <i class="fa fa-sort-alpha-asc m-r-10"></i> About Item
                  </th>
                  <th class="wd-15p pointer" ng-click="data.orderBy = 'about_item'" ng-if="data.orderBy != 'about_item'">
                    <i class="fa fa-sort-alpha-desc m-r-10"></i> About Item
                  </th>
                  {{-- Created date --}}
                  <th class="wd-15p pointer" ng-click="data.orderBy = '-created_at'" ng-if="data.orderBy == 'created_at'">
                    <i class="fa fa-sort-numeric-asc m-r-10"></i> Created Datetime
                  </th>
                  <th class="wd-15p pointer" ng-click="data.orderBy = 'created_at'" ng-if="data.orderBy != 'created_at'">
                    <i class="fa fa-sort-numeric-desc m-r-10"></i> Created Datetime
                  </th>
                  <th class="text-center wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="row in data.fromDB | orderBy : data.orderBy | filter:data.search | limitTo:data.limit">
                  <td class="text-center">
                    <div class="custom-file editing-true editing-true-@{{ row.id }} hidden">
                      <input type="file" id="icon-edit" class="custom-file-input form-control">
                      <label class="custom-file-label custom-file-label-primary" for="icon">Choose file</label>
                    </div>
                    <img class="editing-false editing-false-@{{ row.id }}" src="{{ asset('upload/img/packet-items') }}/@{{ row.icon }}" alt="" style="width : 50px; height: 50px; object-fit: cover;">
                  </td>
                  <td>
                    <input type="text" name="" value="" ng-model="data.name" class="form-control editing-true editing-true-@{{ row.id }} hidden">
                    <span class="editing-false editing-false-@{{ row.id }}">
                      @{{ row.name }}
                    </span>
                  </td>
                  <td>
                    <textarea name="name" rows="8" cols="80" ng-model="data.about_item" class="form-control editing-true editing-true-@{{ row.id }} hidden">@{{ row.about_item }}</textarea>
                    <span class="editing-false editing-false-@{{ row.id }}">
                      @{{ row.about_item }}
                    </span>
                  </td>
                  <td class="text-center">
                    <input type="datetime" name="" value="@{{ row.created_at }}" disabled class="form-control editing-true editing-true-@{{ row.id }} hidden">
                    <span class="editing-false editing-false-@{{ row.id }}">
                      @{{ row.created_at }}
                    </span>
                  </td>
                  <td class="text-center">
                    <a data-toggle="tooltip-warning" title="Update @{{ row.name }} Destination" href="" class="editing-true editing-true-@{{ row.id }} hidden tx-gray-600 tx-24" ng-click="action.edit.run()">
                      <i class="fa fa-save"></i>
                    </a>
                    <a data-toggle="tooltip-danger" title="Cancel Edit" href="" class="editing-true editing-true-@{{ row.id }} hidden tx-danger-600 tx-24 mg-l-10" ng-click="action.edit.close()">
                      <i class="fa fa-times"></i>
                    </a>

                    <a data-toggle="tooltip-warning" title="Edit @{{ row.name }} Destination" href="" class="editing-false editing-false-@{{ row.id }} tx-gray-600 tx-24" ng-click="action.edit.start(row)">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <a data-toggle="tooltip-danger" title="Delete @{{ row.name }} Destination" href="" class="editing-false editing-false-@{{ row.id }} tx-danger-600 tx-24 mg-l-10" ng-click="action.trash.start(row)">
                      <i class="fa fa-trash-o"></i>
                    </a>
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
  @include('site.admin.packet-items.create')
  {{-- modal question --}}
  @include('site.admin.packet-items.delete')
@endsection
