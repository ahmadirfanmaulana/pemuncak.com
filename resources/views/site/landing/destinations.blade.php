@extends('layouts.app')

@section('title')
  Destinations
@endsection

@section('menu-' . $menu_active)
  active
@endsection

@section('content')
  <section class="page-cover style cover-navbar-wrapper pt-164" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)), url(../images/destination-1.jpg) 50% 60%;">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
              	<h1 class="page-title">DESTINATIONS</h1>
                  <ul class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Destinations</li>
                  </ul>
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section>

<section class="innerpage-wrapper">
  <div id="flight-details" class="innerpage-section-padding" style="padding-bottom: 0px;">
    <div class="container">
        <div class="row">
          <div class="page-heading">
            <h2>Favorite Destination</h2>
            <hr class="heading-line">
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                <div class="detail-slider">
                    <div class="feature-slider">
                        <div><img src="images/f-feature-1.jpg" class="img-responsive" alt="feature-img"/></div>
                        <div><img src="images/f-feature-2.jpg" class="img-responsive" alt="feature-img"/></div>
                        <div><img src="images/f-feature-3.jpg" class="img-responsive" alt="feature-img"/></div>
                        <div><img src="images/f-feature-4.jpg" class="img-responsive" alt="feature-img"/></div>
                        <div><img src="images/f-feature-5.jpg" class="img-responsive" alt="feature-img"/></div>
                    </div><!-- end feature-slider -->

                    <div class="feature-slider-nav">
                        <div><img src="images/f-feature-thumb-1.jpg" class="img-responsive" alt="feature-thumb"/></div>
                        <div><img src="images/f-feature-thumb-2.jpg" class="img-responsive" alt="feature-thumb"/></div>
                        <div><img src="images/f-feature-thumb-3.jpg" class="img-responsive" alt="feature-thumb"/></div>
                        <div><img src="images/f-feature-thumb-4.jpg" class="img-responsive" alt="feature-thumb"/></div>
                        <div><img src="images/f-feature-thumb-5.jpg" class="img-responsive" alt="feature-thumb"/></div>
                    </div><!-- end feature-slider-nav -->

                	<ul class="list-unstyled features flight-features">
                    	<li><div class="f-icon"><i class="fa fa-map-marker"></i></div><div class="f-text"><h3 class="f-heading">PAPANDAYAN MOUNTAIN</h3><p class="f-data">SUBANG, WEST JAVA</p></div></li>
                      <li><div class="f-icon"><i class="fa fa-plane"></i></div><div class="f-text"><p class="f-heading">To</p><p class="f-data">Paris</p></div></li>
                      <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Total Time</p><p class="f-data">6 hrs 30 mins</p></div></li>
                    </ul>
                </div><!-- end detail-slider -->

                <div class="detail-tabs">
                	<ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#flight-info" data-toggle="tab">Flight Information</a></li>
                        <li><a href="#entertainment" data-toggle="tab">Entertainment</a></li>
                        <li><a href="#connectivity" data-toggle="tab">Connectivity</a></li>
                        <li><a href="#fare" data-toggle="tab">Fare</a></li>
                        <li><a href="#baggage" data-toggle="tab">Baggage</a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="flight-info" class="tab-pane in active">
                        	<div class="row">
                        		<div class="col-sm-4 col-md-4 tab-img">
                            		<img src="images/flight-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" />
                                </div><!-- end columns -->

                                <div class="col-sm-8 col-md-8 tab-text">
                            		<h3>Flight Information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end flight-info -->

                        <div id="entertainment" class="tab-pane">
                        	<div class="row">
                        		<div class="col-sm-4 col-md-4 tab-img">
                            		<img src="images/flight-detail-tab-2.jpg" class="img-responsive" alt="flight-detail-img" />
                                </div><!-- end columns -->

                                <div class="col-sm-8 col-md-8 tab-text">
                            		<h3>Entertainment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end entertainment -->

                        <div id="connectivity" class="tab-pane">
                        	<div class="row">
                        		<div class="col-sm-4 col-md-4 tab-img">
                            		<img src="images/flight-detail-tab-3.jpg" class="img-responsive" alt="flight-detail-img" />
                                </div><!-- end columns -->

                                <div class="col-sm-8 col-md-8 tab-text">
                            		<h3>Connectivity</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br/> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end connectivity -->

                        <div id="fare" class="tab-pane">
                        	<div class="row">
                        		<div class="col-sm-4 col-md-4 tab-img">
                            		<img src="images/flight-detail-tab-4.jpg" class="img-responsive" alt="flight-detail-img" />
                                </div><!-- end columns -->

                                <div class="col-sm-8 col-md-8 tab-text">
                            		<h3>Fare</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end fare -->

                        <div id="baggage" class="tab-pane">
                        	<div class="row">
                        		<div class="col-sm-4 col-md-4 tab-img">
                            		<img src="images/flight-detail-tab-5.jpg" class="img-responsive" alt="flight-detail-img" />
                                </div><!-- end columns -->

                                <div class="col-sm-8 col-md-8 tab-text">
                            		<h3>Baggage</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end baggage -->

                    </div><!-- end tab-content -->
                </div><!-- end detail-tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="container">
            <form class="lg-booking-form">
                  <div class="lg-booking-form-heading">
                    <span>1</span>
                    <h3>Personal Information</h3>
                  </div><!-- end lg-bform-heading -->

                  <div class="personal-info">

                      <div class="row">
                          <div class="col-xs-6 col-sm-6">
                              <div class="form-group">
                                  <label>First Name</label>
                                  <input type="text" class="form-control" required="">
                              </div>
                          </div><!-- end columns -->

                          <div class="col-xs-6 col-sm-6">
                              <div class="form-group">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control" required="">
                              </div>
                          </div><!-- end columns -->
                      </div><!-- end row -->

                      <div class="row">
                        <div class="col-sm-6">
                              <div class="form-group">
                                  <label>Date of Birth</label>
                                  <input type="text" class="form-control dpd3" required="">
                              </div>
                          </div><!-- end columns -->

                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label>Country</label>
                                  <input type="text" class="form-control" required="">
                              </div>
                          </div><!-- end columns -->
                      </div><!-- end row -->

                      <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label>Email Address</label>
                                  <input type="email" class="form-control" required="">
                              </div>
                          </div><!-- end columns -->

                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label>Phone Number</label>
                                  <input type="text" class="form-control" required="">
                              </div>
                          </div><!-- end columns -->
                      </div><!-- end row -->

                      <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label>Permanent Address</label>
                                  <textarea type="text" class="form-control" rows="2"></textarea>
                              </div>
                          </div><!-- end columns -->
                      </div>
                  </div><!-- end personal-info -->

                  <div class="lg-booking-form-heading">
                    <span>2</span>
                    <h3>Payment Information</h3>
                  </div><!-- end lg-bform-heading -->

                  <div class="payment-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-credit-card" data-toggle="tab"> Via Credit Card</a></li>
                          <li><a href="#tab-paypal" data-toggle="tab">Via Paypal</a></li>
                      </ul>

                      <div class="tab-content">
                        <div id="tab-credit-card" class="tab-pane fade in active">
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>Card Type</label>
                                          <select class="form-control">
                                              <option selected="">Select</option>
                                          </select>
                                          <span><i class="fa fa-angle-down"></i></span>
                                      </div>
                                  </div><!-- end columns -->

                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>Card Number</label>
                                          <input type="text" class="form-control" required="">
                                      </div>
                                  </div><!-- end columns -->
                              </div><!-- end row -->

                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>Card Holder Name</label>
                                          <input type="text" class="form-control" required="">
                                      </div>
                                  </div><!-- end columns -->

                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>CVC</label>
                                          <input type="text" class="form-control" required="">
                                      </div>
                                  </div><!-- end columns -->
                              </div><!-- end row -->

                              <div class="row">
                                  <div class="col-xs-6 col-sm-3">
                                      <div class="form-group">
                                          <label>Expiry Month</label>
                                          <select class="form-control">
                                              <option selected="">Select</option>
                                              <option>February</option>
                                              <option>March</option>
                                              <option>April</option>
                                          </select>
                                          <span><i class="fa fa-angle-down"></i></span>
                                      </div>
                                  </div><!-- end columns -->

                                  <div class="col-xs-6 col-sm-3">
                                      <div class="form-group">
                                          <label>Expiry Year</label>
                                          <select class="form-control">
                                              <option selected="">Select</option>
                                              <option>2018</option>
                                              <option>2019</option>
                                              <option>2020</option>
                                          </select>
                                          <span><i class="fa fa-angle-down"></i></span>
                                      </div>
                                  </div><!-- end columns -->
                              </div><!-- end row -->

                          </div><!-- end tab-credit-card -->

                          <div id="tab-paypal" class="tab-pane fade">
                            <img src="images/paypal.png" class="img-responsive" alt="paypal">
                            <div class="paypal-text">
                                <p><span>Important:</span> You will be redirected to Paypal Website to make the payment process secure and complete.</p>
                                   <a href="#" class="btn btn-default btn-lightgrey">Checkout via Paypal<span><i class="fa fa-angle-double-right"></i></span></a>
                              </div><!-- end paypal-text -->

                              <div class="clearfix"></div>
                          </div><!-- end tab-paypal -->

                      </div><!-- end tab-content -->
                  </div><!-- end payment-tabs -->

                  <div class="checkbox">
                      <label><input type="checkbox"> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                  </div><!-- end checkbox -->

                  <button type="submit" class="btn btn-orange">Confirm Booking</button>
              </form>
          </div>
        </div>

  <div id="tour-grid" class="innerpage-section-padding">
    <div class="container">
        <div class="row">
          <div class="page-heading">
            <h2>More Destination</h2>
            <hr class="heading-line">
          </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                <div class="row">

                  @foreach ($data['destinations'] as $destination)
                      <div class="col-sm-6 col-md-6 col-lg-4">
                          <div class="grid-block main-block t-grid-block">
                          	<div class="main-img t-grid-img">
                              	<a href="tour-detail-right-sidebar.html">
                          			<img src="{{ asset('upload/img/destinations/poster/' . $destination->poster) }}" class="img-responsive" alt="hotel-img" style="height: 150px; object-fit: cover;">
                                  </a>
                                  <div class="main-mask">
                                      <ul class="list-unstyled list-inline offer-price-1">
                                          <li class="price"><i class="flaticon-cloudy-1 orange"></i><span class="divider">|</span><span class="pkg">Cloudy & Twisted</span></li>
                                      </ul>
                                  </div><!-- end main-mask -->
                          	</div><!-- end t-grid-img -->

                            <div class="block-info t-grid-info" style="height:250px;position:relative;">
                             	<div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                              </div><!-- end rating -->

                           	  <h3 class="block-title text-capitalize"><a href="tour-detail-right-sidebar.html">{{ $destination->name }}</a></h3>
                              <p class="block-minor"><i class="fa fa-map-marker" style="margin-right:5px;padding-top:15px;padding-bottom:10px;"></i> {{ $destination->regional->name }}, {{ $destination->province->name }}</p>
                              <p>{{ $destination->about }} </p>
                              <div class="grid-btn" style="position:absolute; bottom:19px; width: calc(100% - 38px);">
                              	<a href="{{ route('destination_detail', ['id' => $destination->id]) }}" class="btn btn-orange btn-block btn-lg"><i class="fa fa-search"></i> See Detail</a>
                              </div><!-- end grid-btn -->
                            </div><!-- end t-grid-info -->
                          </div><!-- end t-grid-block -->
                      </div><!-- end columns -->
                    @endforeach

                </div><!-- end row -->

                <div class="pages">
                    <button type="button" name="button" class="btn btn-success btn-lg" style="margin-top:65px;">
                      <i class="fa fa-plus" style="margin-right: 10px;"></i> Load More
                    </button>
                    {{-- <ol class="pagination">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                    </ol> --}}
                </div><!-- end pages -->
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
              <div class="page-search-form" style="margin-bottom:30px;">
                <h4 style="margin-bottom:25px;"><i class="fa fa-search"></i> Search The <span class="text-orange">Tour</i></span></h4>

                  <form class="pg-search-form">
                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="form-group">
                                  <label><span><i class="fa fa-map-marker"></i></span>Where</label>
                                  <input class="form-control" placeholder="City, Destination, Country">
                              </div>
                          </div><!-- end columns -->

                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="form-group">
                                  <label><span><i class="fa fa-calendar"></i></span>Month</label>
                                  <select class="form-control">
                                      <option selected="">Select</option>
                                      <option>January</option>
                                      <option>February</option>
                                      <option>March</option>
                                      <option>April</option>
                                      <option>May</option>
                                      <option>June</option>
                                      <option>July</option>
                                      <option>August</option>
                                      <option>September</option>
                                      <option>October</option>
                                      <option>November</option>
                                      <option>December</option>
                                  </select>
                              </div>
                          </div><!-- end columns -->

                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="row">
                                  <div class="col-xs-12 col-sm-12">
                                      <div class="form-group">
                                          <label><span><i class="fa fa-user"></i></span>Adults</label>
                                          <input type="number" class="form-control" placeholder="Total" min="0">                                          			</div>
                                  </div><!-- end columns -->

                                  <div class="col-xs-12 col-sm-12">
                                      <div class="form-group">
                                          <label><span><i class="fa fa-users"></i></span>Kids</label>
                                          <input type="number" class="form-control" placeholder="Total" min="0">                                          			</div>
                                  </div><!-- end columns -->
                            </div>
                          </div>

                      </div><!-- end row -->

                      <button class="btn btn-orange">Search</button>
                  </form>

              </div>

              <div class="side-bar-block filter-block">
                  <h3>Sort By Filter</h3>
                  <p>Find your dream flights today</p>

                  <div class="panels-group">

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <a href="#panel-1" data-toggle="collapse">Select Country <span><i class="fa fa-angle-down"></i></span></a>
                          </div><!-- end panel-heading -->

                          <div id="panel-1" class="panel-collapse collapse">
                              <div class="panel-body text-left">
                                  <ul class="list-unstyled">
                                      <li class="custom-check"><input type="checkbox" id="check01" name="checkbox">
                                      <label for="check01"><span><i class="fa fa-check"></i></span>All</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check02" name="checkbox">
                                      <label for="check02"><span><i class="fa fa-check"></i></span>Australia</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check03" name="checkbox">
                                      <label for="check03"><span><i class="fa fa-check"></i></span>Bangkok</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check04" name="checkbox">
                                      <label for="check04"><span><i class="fa fa-check"></i></span>China</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check05" name="checkbox">
                                      <label for="check05"><span><i class="fa fa-check"></i></span>India</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check06" name="checkbox">
                                      <label for="check06"><span><i class="fa fa-check"></i></span>Italy</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check07" name="checkbox">
                                      <label for="check07"><span><i class="fa fa-check"></i></span>London</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check08" name="checkbox">
                                      <label for="check08"><span><i class="fa fa-check"></i></span>Newzeland</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check09" name="checkbox">
                                      <label for="check09"><span><i class="fa fa-check"></i></span>Shanghai</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check10" name="checkbox">
                                      <label for="check10"><span><i class="fa fa-check"></i></span>Sydney</label></li>
                                  </ul>
                              </div><!-- end panel-body -->
                          </div><!-- end panel-collapse -->
                      </div><!-- end panel-default -->

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <a href="#panel-2" data-toggle="collapse">Days <span><i class="fa fa-angle-down"></i></span></a>
                          </div><!-- end panel-heading -->

                          <div id="panel-2" class="panel-collapse collapse">
                              <div class="panel-body text-left">
                                  <ul class="list-unstyled">
                                      <li class="custom-check"><input type="checkbox" id="check11" name="checkbox">
                                      <label for="check11"><span><i class="fa fa-check"></i></span>All</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check12" name="checkbox">
                                      <label for="check12"><span><i class="fa fa-check"></i></span>2 Days</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check13" name="checkbox">
                                      <label for="check13"><span><i class="fa fa-check"></i></span>3 Days</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check14" name="checkbox">
                                      <label for="check14"><span><i class="fa fa-check"></i></span>5 Days</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check15" name="checkbox">
                                      <label for="check15"><span><i class="fa fa-check"></i></span>7 Days</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check16" name="checkbox">
                                      <label for="check16"><span><i class="fa fa-check"></i></span>10 Days</label></li>
                                  </ul>
                              </div><!-- end panel-body -->
                          </div><!-- end panel-collapse -->
                      </div><!-- end panel-default -->

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <a href="#panel-3" data-toggle="collapse">Rating <span><i class="fa fa-angle-down"></i></span></a>
                          </div><!-- end panel-heading -->

                          <div id="panel-3" class="panel-collapse collapse">
                              <div class="panel-body text-left">
                                  <ul class="list-unstyled">
                                      <li class="custom-check"><input type="checkbox" id="check17" name="checkbox">
                                      <label for="check17"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check18" name="checkbox">
                                      <label for="check18"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check19" name="checkbox">
                                      <label for="check19"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check20" name="checkbox">
                                      <label for="check20"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                      <li class="custom-check"><input type="checkbox" id="check21" name="checkbox">
                                      <label for="check21"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                  </ul>
                              </div><!-- end panel-body -->
                          </div><!-- end panel-collapse -->
                      </div><!-- end panel-default -->

                  </div><!-- end panel-group -->

                  <div class="price-slider">
                      <p><input type="text" id="amount" readonly=""></p>
                      <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 45%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 15%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 60%;"></span></div>
                  </div><!-- end price-slider -->
              </div><!-- end side-bar-block -->
            </div><!-- end columns -->

        </div><!-- end row -->
	</div><!-- end container -->
</div>
@endsection
