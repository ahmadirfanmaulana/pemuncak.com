@extends('layouts.template_dashboard')

@section('title')
  Destinations
@endsection

@section('content')
  <div class="col-md-3">
    <a href="#" class="btn btn-primary btn-block" ng-click="go('new')">
      <i class="ion ion-android-add-circle"></i> New Packet Item
    </a>
  </div>
  <div class="col-md-9">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
        <h6 class="mg-b-0 tx-14 tx-inverse"><i class="ion ion-ios-list-outline"></i> LIST PACKET ITEMS</h6>
        <div class="card-option tx-24">
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
        </div><!-- card-option -->
      </div><!-- card-header -->
      <div class="card-body">
        <div class="table-wrapper">
            <table id="" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="text-center wd-15p">No</th>
                  <th class="text-center wd-15p">Name</th>
                  <th class="text-center wd-15p">Created Datetime</th>
                  <th class="text-center wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="packetItem in packetItems.data">
                  <td class="text-center">1</td>
                  <td>
                    @{{ packetItem.name }}
                  </td>
                  <td class="text-center">
                    @{{ packetItem.created_at }}
                  </td>
                  <td class="text-center">
                    <button type="button" name="button" class="btn btn-sm btn-warning" link ng-click="go('edit')">
                      <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" name="button" class="btn btn-sm btn-danger">
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
