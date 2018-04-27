@extends('layouts.template_dashboard')

@section('title')
  Edit Packet Item
@endsection

@section('content')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
          <h6 class="mg-b-0 tx-14 tx-inverse"><i class="ion ion-ios-paper-outline"></i> FORM EDIT PACKET ITEM</h6>
          <div class="card-option tx-24">
            <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
            <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
          </div><!-- card-option -->
        </div>
        <div class="card-body">
            <div class="form-layout form-layout-3">
              <div class="row no-gutters">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter Packet Item Name (required)" ng-model="packetItems.test">
                  </div>
                </div><!-- col-4 -->

              </div><!-- row -->
              <div class="form-layout-footer bd pd-20 bd-t-0">
                <button class="btn btn-primary bd-0" ng-click="packetItems.create()"><i class="fa fa-save"></i> Save</button>
                <button link ng-click="goTo('packet-items')" class="btn btn-secondary bd-0">Cancel</button>
              </div><!-- form-group -->
            </div><!-- form-layout -->
        </div>
      </div>
    </div>
@endsection
