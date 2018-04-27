@extends('layouts.template_dashboard')

@section('title')
  Dashboard
@endsection

@section('content')
  <div class="col-sm-6 col-lg-3">
    <div class="card card-status">
      <div class="media">
        <i class="icon ion-flag tx-purple"></i>
        <div class="media-body">
          <h1>27</h1>
          <p>Destinations</p>
        </div><!-- media-body -->
      </div><!-- media -->
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
    <div class="card card-status">
      <div class="media">
        <i class="icon icon ion-android-list tx-teal"></i>
        <div class="media-body">
          <h1>447</h1>
          <p>Total Posts</p>
        </div><!-- media-body -->
      </div><!-- media -->
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
    <div class="card card-status">
      <div class="media">
        <i class="icon ion ion-android-done-all tx-primary"></i>
        <div class="media-body">
          <h1>15</h1>
          <p>Total Steps</p>
        </div><!-- media-body -->
      </div><!-- media -->
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
    <div class="card card-status">
      <div class="media">
        <i class="icon ion ion-android-contacts tx-pink"></i>
        <div class="media-body">
          <h1>156</h1>
          <p>Total Users</p>
        </div><!-- media-body -->
      </div><!-- media -->
    </div><!-- card -->
  </div><!-- col-3 -->
@endsection
