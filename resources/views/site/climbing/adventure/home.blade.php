@extends('layouts.template_dashboard')

@section('title')
  Adventure
@endsection

@section('content')
  <div class="col-md-12">

    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
        <h6 class="mg-b-0 tx-14 tx-inverse">The Next Adventure</h6>
        <div class="card-option tx-24">
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
          <a href="#" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
        </div><!-- card-option -->
      </div><!-- card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <div id="carousel3" class="carousel slide control-top-right" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="{{ asset('upload/img/destinations/destination-1.jpg') }}" alt="First slide" style="height: 400px; width: 100%; object-fit: cover;">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="{{ asset('upload/img/destinations/destination-2.jpg') }}" alt="Second slide" style="height: 400px; width: 100%; object-fit: cover;">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="{{ asset('upload/img/destinations/destination-3.jpg') }}" alt="Third slide"  style="height: 400px; width: 100%; object-fit: cover;">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel3" type="silent" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel3" type="silent" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="d-flex mg-r-0 wd-50">
                      <i class="flaticon-cloudy-1 flaticon flaticon-30 tx-primary tx-30 tx"></i>
                    </div><!-- d-flex -->
                    <div class="media-body">
                      <h6 class="tx-inverse">Weather</h6>
                      <p class="mg-b-0">45<sup>o</sup> Celcious</p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="d-flex mg-r-0 wd-50">
                      <i class="fa fa-calendar tx-primary tx-30"></i>
                    </div><!-- d-flex -->
                    <div class="media-body">
                      <h6 class="tx-inverse">Start In</h6>
                      <p class="mg-b-0">Augustus 16th 2018</p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="d-flex mg-r-0 wd-50">
                      <i class="ion ion-android-add-circle tx-primary tx-30"></i>
                    </div><!-- d-flex -->
                    <div class="media-body">
                      <h6 class="tx-inverse">If Success</h6>
                      <p class="mg-b-0">Point Sum : <span class="text-primary">5 <i class="ion ion-ribbon-b"></i> </span>
                      </p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
                <div class="list-group-item pd-y-20">
                  <div class="media">
                    <div class="d-flex mg-r-0 wd-50">
                      <i class="ion ion-android-remove-circle tx-primary tx-30"></i>
                    </div><!-- d-flex -->
                    <div class="media-body">
                      <h6 class="tx-inverse">If Not Success</h6>
                      <p class="mg-b-0">Point Sub : <span class="text-primary"> - 5 <i class="ion ion-ribbon-b"></i> </span>
                      </p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- list-group-item -->
              </div>
          </div>
        </div>
      </div><!-- card-body -->
      <div class="card-footer bd-t tx-center">
        <a href="#" class="btn btn-primary">Continue</a>
        <a href="#" class="btn btn-secondary">Cancel</a>
      </div>
    </div>

  </div>
@endsection
