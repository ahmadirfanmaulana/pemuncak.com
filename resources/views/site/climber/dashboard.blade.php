@extends('layouts.app_climber')

@section('title')
  Dashboard
@endsection

@section('menu_' . $menu_active)
  active
@endsection

@section('clientAttr')
  ng-controller=""
@endsection

@section('javascript')
  <script type="text/javascript" src="{{ asset('js/have/climber-dashboard.js') }}"></script>
@endsection

@section('content')
  <div class="col-md-3">
    <button ng-click="action.save.start()" class="btn btn-primary btn-block">
      <i class="ion ion-android-add-circle"></i> New Destination
    </button>
    <br>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
        <h6 class="mg-b-0 tx-14 tx-inverse"><i class="ion ion-ios-list-outline"></i> LIST DESTINATIONS</h6>
        <div class="card-option tx-24">
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
        </div><!-- card-option -->
      </div><!-- card-header -->
      <div class="card-body">
        <div class="table-wrapper">
            <table id="" class="table-hover table-striped table display responsive nowrap">
              <thead>
                <tr>
                  <th class="text-center wd-15p">Poster</th>
                  <th class="text-center wd-15p">Name</th>
                  <th class="text-center wd-15p">Regional</th>
                  <th class="text-center wd-15p">Province</th>
                  <th class="text-center wd-15p">Created Datetime</th>
                  <th class="text-center wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="row in data.fromDB">
                  <td class="text-center">
                    <div class="custom-file editing-true editing-true-@{{ row.id }} hidden">
                      <input type="file" id="poster-edit" class="custom-file-input form-control">
                      <label class="custom-file-label custom-file-label-primary" for="poster-edit">Choose file</label>
                    </div>
                    <img class="editing-false editing-false-@{{ row.id }}" src="{{ asset('upload/img/destinations/poster') }}/@{{ row.poster }}" alt="" style="width : 50px; height: 50px; object-fit: cover;">
                  </td>
                  <td>
                    <input type="text" name="" value="" ng-model="data.name" class="form-control editing-true editing-true-@{{ row.id }} hidden">
                    <span class="editing-false editing-false-@{{ row.id }}">
                      @{{ row.name }}
                    </span>
                  </td>
                  <td>
                      @{{ row.province_name }}
                  </td>
                  <td>
                      @{{ row.regional_name }}
                  </td>
                  <td class="text-center">
                    <input type="datetime" name="" value="@{{ row.created_at }}" disabled class="form-control editing-true editing-true-@{{ row.id }} hidden">
                    <span class="editing-false editing-false-@{{ row.id }}">
                      @{{ row.created_at }}
                    </span>
                  </td>
                  <td class="text-center">
                    <button type="button" name="button" class="btn btn-warning btn-sm editing-true editing-true-@{{ row.id }} hidden" ng-click="action.edit.run()">
                      <i class="fa fa-edit"></i> Update
                    </button>
                    <button type="button" name="button" class="btn btn-secondary btn-sm editing-true editing-true-@{{ row.id }} hidden" ng-click="action.edit.close()">
                      <i class="fa fa-times"></i> Cancel
                    </button>
                    <button type="button" name="button" class="btn btn-sm btn-warning editing-false editing-false-@{{ row.id }}" ng-click="action.edit.start(row)">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                    <button type="button" name="button" class="btn btn-sm btn-danger editing-false editing-false-@{{ row.id }}" ng-click="action.trash.start(row)">
                      <i class="fa fa-trash"></i> Delete
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
  @include('site.admin.destinations.create')
  {{-- modal question --}}
  @include('site.admin.destinations.delete')
@endsection
