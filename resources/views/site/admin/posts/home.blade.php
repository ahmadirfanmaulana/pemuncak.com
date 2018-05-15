@extends('layouts.app_administrator')

@section('title')
  Posts
@endsection

@section('menu_' . $menu_active)
  active
@endsection

@section('breadcrumbs')
  <ol class="breadcrumb slim-breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Posts</li>
  </ol>
@endsection

@section('clientAttr')
  ng-controller="Post"
@endsection

@section('javascript')
  <script type="text/javascript" src="{{ asset('js/have/posts.js') }}"></script>
@endsection

@section('content')
  {{-- <div class="col-md-3">
    <button ng-click="action.create.start()" class="btn btn-primary btn-block">
      <i class="ion ion-android-add-circle"></i> New Post
    </button>
    <br>
  </div> --}}
  <div class="col-md-12">

    <ul class="nav nav-activity-profile">
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.load()"><i class="icon fa fa-refresh tx-purple"></i> Refresh Posts</a></li>
      <li class="nav-item"><a href="#" class="nav-link" ng-click="action.create.start()"><i class="icon ion-document-text tx-success"></i> Add an post</a></li>
    </ul>

    <div class="card card-table mg-t-20">
      <div class="card-header">
        <h6 class="slim-card-title">LIST POSTS <span class="pull-right">All Posts : <span class="text-info">@{{ data.count }} <i class="icon ion-android-list"></i></span></h6>
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
            {{-- <thead>
              <tr>
                <th class="text-center wd-15p">Title</th>
                <th class="text-center wd-15p">Poster</th>
                <th class="text-center wd-15p">Description</th>
                <th class="text-center wd-15p">User</th>
                <th class="text-center wd-15p">Type</th>
                <th class="text-center wd-15p">Post Datetime</th>
                <th class="text-center wd-25p">Action</th>
              </tr>
            </thead> --}}
            <tr class="tx-10">
              <th class="wd-10p pd-y-5">Poster</th>
              <th class="pointer" ng-click="data.orderBy = '-title'" ng-if="data.orderBy == 'title'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> Title
              </th>
              <th class="pointer" ng-click="data.orderBy = 'title'" ng-if="data.orderBy != 'title'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> Title
              </th>
              <th class="pointer" ng-click="data.orderBy = '-user.first_name'" ng-if="data.orderBy == 'user.first_name'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> User
              </th>
              <th class="pointer" ng-click="data.orderBy = 'user.first_name'" ng-if="data.orderBy != 'user.first_name'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> User
              </th>
              <th class="pointer" ng-click="data.orderBy = '-type'" ng-if="data.orderBy == 'type'">
                <i class="fa fa-sort-alpha-asc m-r-10"></i> Type
              </th>
              <th class="pointer" ng-click="data.orderBy = 'type'" ng-if="data.orderBy != 'type'">
                <i class="fa fa-sort-alpha-desc m-r-10"></i> Type
              </th>
              <th class="pd-y-5 tx-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="row in data.fromDB | filter:data.search | limitTo:data.limit | orderBy:data.orderBy">
              <td class="pd-l-20">
                <img src="{{ asset('upload/img/posts') }}/@{{ row.poster }}" class="wd-55" alt="Image">
              </td>
              <td class="valign-middle text-uppercase">
                <a href="#" class="tx-inverse tx-14 tx-medium d-block">@{{ row.title }}</a>
                <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> @{{ row.created_at }}</span>
              </td>
              <td class="valign-middle">@{{ row.user.first_name }} (@{{ row.user.username }})</td>
              <td class="valign-middle">
                <span class="text-success">
                  @{{ row.type | uppercase}}
                </span>
              </td>
              <td class="valign-middle tx-center">
                <a data-toggle="tooltip-warning" title="Edit @{{ row.title }} Post" href="#" class="tx-gray-600 tx-24" ng-click="action.edit.start(row)"><i class="fa fa-pencil-square-o"></i></a>
                <a data-toggle="tooltip-danger" title="Delete @{{ row.title }} Post" href="#" class="tx-danger-600 tx-24 mg-l-10" ng-click="action.trash.start(row)"><i class="fa fa-trash-o"></i></a>
                <a data-toggle="tooltip-indigo" title="Detail @{{ row.title }} Post" href="#" class="tx-primary-600 tx-24 mg-l-10" ng-click="action.trash.start(row)"><i class="fa fa-share"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div>
    {{-- <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
        <h6 class="mg-b-0 tx-14 tx-inverse"><i class="ion ion-ios-list-outline"></i> LIST POSTS</h6>
        <div class="card-option tx-24">
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
        </div><!-- card-option -->
      </div><!-- card-header -->
      <div class="card-body">
        <div class="table-wrapper">
            <table id="" class="table-hover table-striped table display responsive nowrap">
              <thead>
                <tr>
                  <th class="text-center wd-15p">Title</th>
                  <th class="text-center wd-15p">Poster</th>
                  <th class="text-center wd-15p">Description</th>
                  <th class="text-center wd-15p">User</th>
                  <th class="text-center wd-15p">Type</th>
                  <th class="text-center wd-15p">Post Datetime</th>
                  <th class="text-center wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="row in data.fromDB">
                  <td>
                    @{{ row.title }}
                  </td>
                  <td class="text-center">
                    <img src="{{ asset('upload/img/posts') }}/@{{ row.poster }}" alt="" style="width: 50px;">
                  </td>
                  <td>
                    <div ng-if="row.description.length > 50">
                      @{{ row.description.substr(0,50) + "..." }}
                    </div>
                    <div ng-else>
                      @{{ row.description }}
                    </div>
                  </td>
                  <td class="text-center">
                    @{{ row.user_id }}
                  </td>
                  <td class="text-center">
                    @{{ row.type }}
                  </td>
                  <td class="text-center">
                    @{{ row.created_at }}
                  </td>

                  <td class="text-center">
                    <button type="button" name="button" class="btn btn-sm btn-warning" ng-click="action.edit.start(row)">
                      <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" name="button" class="btn btn-sm btn-danger" ng-click="action.trash.start(row)">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
      </div>
    </div> --}}
  </div>
@endsection


@section('modal')
  {{-- modal form --}}
  @include('site.admin.posts.create')
  {{-- modal edit --}}
  @include('site.admin.posts.edit')
  {{-- modal question --}}
  @include('site.admin.posts.delete')
@endsection
