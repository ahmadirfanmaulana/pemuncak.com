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
  <div class="col-md-3">
    <button ng-click="action.create.start()" class="btn btn-primary btn-block">
      <i class="ion ion-android-add-circle"></i> New Step
    </button>
    <br>
  </div>
  <div class="col-md-9">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
        <h6 class="mg-b-0 tx-14 tx-inverse"><i class="ion ion-ios-list-outline"></i> LIST STEPS</h6>
        <div class="card-option tx-24">
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
        </div><!-- card-option -->
      </div><!-- card-header -->
      <div class="card-body">
        <div class="table-wrapper">
            <table id="" class="table-hover table-striped table display responsive nowrap">
              <thead>
                <tr>
                  <th class="text-center wd-15p">Destination</th>
                  <th class="text-center wd-15p">Level</th>
                  <th class="text-center wd-15p">Description</th>
                  <th class="text-center wd-15p">Sum Point</th>
                  <th class="text-center wd-15p">Sub Point</th>
                  <th class="text-center wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="row in data.fromDB">
                  <td>
                    <img src="{{ asset('upload/img/destinations/poster') }}/@{{ row.destination.poster }}" alt="" style="width: 20px;">
                    @{{ row.destination.name }}
                  </td>
                  <td class="text-center">
                    @{{ row.level }}
                  </td>
                  <td>
                    @{{ row.description }}
                  </td>
                  <td class="text-center">
                    @{{ row.sum_point }}
                  </td>
                  <td class="text-center">
                    @{{ row.sub_point }}
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
