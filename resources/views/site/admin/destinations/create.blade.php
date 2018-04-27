@extends('layouts.template_dashboard')

@section('title')
  New Destinations
@endsection

@section('content')
  <div ng-controller="destinations">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
          <h6 class="mg-b-0 tx-14 tx-inverse"><i class="ion ion-ios-paper-outline"></i> FORM NEW DESTINATION</h6>
          <div class="card-option tx-24">
            <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
            <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
          </div><!-- card-option -->
        </div>
        <div class="card-body">
          <form class="" action="" method="post">
            <div class="form-layout form-layout-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter Destination Name (required)">
                  </div>
                </div><!-- col-4 -->
                <div class="col-md-4 mg-t--1 mg-md-t-0">
                  <div class="form-group mg-md-l--1">
                    <div class="custom-file">
                      <input type="file" name="poster" class="custom-file-input" id="customFile2">
                      <label class="custom-file-label custom-file-label-primary" for="customFile">Choose Poster (required)</label>
                    </div>
                  </div>
                </div><!-- col-4 -->
                <div class="col-md-4 mg-t--1 mg-md-t-0">
                  <div class="form-group mg-md-l--1">
                    <input class="form-control" type="text" name="map" placeholder="Enter Embeded Map">
                  </div>
                </div><!-- col-4 -->
                <div class="col-md-6">
                  <div class="form-group bd-t-0-force">
                    <select class="form-control select2-show-search" data-placeholder="Select Province" ng-change="provinces.changed()" ng-model="provinces.input">
                      <option label="Choose one"></option>
                      <option value="@{{ province.id }}" ng-repeat="province in provinces.data">
                        @{{ province.name }}
                      </option>
                    </select>
                  </div>
                </div><!-- col-6 -->
                <div class="col-md-6">
                  <div class="form-group bd-t-0-force">
                    <select class="form-control select2-show-search" data-placeholder="Select Regional">
                      <option label="Choose one"></option>
                      <option value="Firefox" ng-repeat="regional in regionals.data">
                        @{{ regional.name }}
                      </option>
                    </select>
                  </div>
                </div><!-- col-6 -->
                <div class="col-md-12">
                  <div class="form-group bd-t-0-force">
                    <textarea name="full_address" placeholder="Full Address" class="form-control" rows="8" cols="80"></textarea>
                  </div>
                </div><!-- col-6 -->

              </div><!-- row -->
              <div class="form-layout-footer bd pd-20 bd-t-0">
                <button class="btn btn-primary bd-0"><i class="fa fa-save"></i> Save</button>
                <button link ng-click="goTo('destinations')" class="btn btn-secondary bd-0">Cancel</button>
              </div><!-- form-group -->
            </div><!-- form-layout -->
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
