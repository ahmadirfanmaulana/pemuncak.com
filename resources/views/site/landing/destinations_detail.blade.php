@extends('layouts.app')

@section('title')
  Adventures
@endsection

@section('menu-' . $menu_active)
  active
@endsection

@section('content')
  <section class="page-cover" id="cover-tour-detail">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h1 class="page-title">Tour Detail Left Sidebar</h1>
                  <ul class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Tour Detail Left Sidebar</li>
                  </ul>
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section><!-- end page-cover -->


  <!--===== INNERPAGE-WRAPPER ====-->
  <section class="innerpage-wrapper">
    <div id="tour-details" class="innerpage-section-padding">
          <div class="container">
              <div class="row">

                  <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                      <div class="side-bar-block booking-form-block">
                        <h2 class="selected-price">$568.00 <span>Orlando</span></h2>

                        <div class="booking-form">
                            <h3>Book Tour</h3>
                              <p>Find your dream tour today</p>

                              <form>
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="First Name" required/>
                                  </div>

                                  <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Last Name" required/>
                                  </div>

                                  <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Email" required/>
                                  </div>

                                  <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Phone" required/>
                                  </div>

                                  <div class="form-group">
                                  <input type="text" class="form-control dpd3" placeholder="Booking Date" required/>
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                          <div class="form-group right-icon">
                                              <select class="form-control">
                                                  <option selected>Adults</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                              </select>
                                              <i class="fa fa-angle-down"></i>
                                          </div>
                                      </div>

                                      <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">
                                          <div class="form-group right-icon">
                                              <select class="form-control">
                                                  <option selected>Children</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                              </select>
                                              <i class="fa fa-angle-down"></i>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group right-icon">
                                      <select class="form-control">
                                          <option selected>Payment Method</option>
                                          <option>Credit Card</option>
                                          <option>Paypal</option>
                                      </select>
                                      <i class="fa fa-angle-down"></i>
                                  </div>

                                  <div class="checkbox custom-check">
                                    <input type="checkbox" id="check01" name="checkbox"/>
                                      <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                  </div>

                                  <button class="btn btn-block btn-orange">Confirm Booking</button>
                              </form>

                          </div><!-- end booking-form -->
                      </div><!-- end side-bar-block -->

                      <div class="row">
                          <div class="col-xs-12 col-sm-6 col-md-12">
                              <div class="side-bar-block main-block ad-block">
                                  <div class="main-img ad-img">
                                      <a href="#">
                                          <img src="images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                          <div class="ad-mask">
                                              <div class="ad-text">
                                                  <span>Luxury</span>
                                                  <h2>Car</h2>
                                                  <span>Offer</span>
                                              </div><!-- end ad-text -->
                                          </div><!-- end columns -->
                                      </a>
                                  </div><!-- end ad-img -->
                              </div><!-- end side-bar-block -->
                          </div><!-- end columns -->

                          <div class="col-xs-12 col-sm-6 col-md-12">
                              <div class="side-bar-block support-block">
                                  <h3>Need Help</h3>
                                  <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                  <div class="support-contact">
                                      <span><i class="fa fa-phone"></i></span>
                                      <p>+1 123 1234567</p>
                                  </div><!-- end support-contact -->
                              </div><!-- end side-bar-block -->
                          </div><!-- end columns -->

                      </div><!-- end row -->
                  </div><!-- end columns -->

                  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                      <div class="detail-slider">
                          <div class="feature-slider">
                              <div><img src="images/t-feature-1.jpg" class="img-responsive" alt="feature-img"/></div>
                              <div><img src="images/t-feature-2.jpg" class="img-responsive" alt="feature-img"/></div>
                              <div><img src="images/t-feature-3.jpg" class="img-responsive" alt="feature-img"/></div>
                              <div><img src="images/t-feature-4.jpg" class="img-responsive" alt="feature-img"/></div>
                              <div><img src="images/t-feature-5.jpg" class="img-responsive" alt="feature-img"/></div>
                          </div><!-- end feature-slider -->

                          <div class="feature-slider-nav">
                              <div><img src="images/t-feature-thumb-1.jpg" class="img-responsive" alt="feature-thumb"/></div>
                              <div><img src="images/t-feature-thumb-2.jpg" class="img-responsive" alt="feature-thumb"/></div>
                              <div><img src="images/t-feature-thumb-3.jpg" class="img-responsive" alt="feature-thumb"/></div>
                              <div><img src="images/t-feature-thumb-4.jpg" class="img-responsive" alt="feature-thumb"/></div>
                              <div><img src="images/t-feature-thumb-5.jpg" class="img-responsive" alt="feature-thumb"/></div>
                          </div><!-- end feature-slider-nav -->

                          <ul class="list-unstyled features tour-features">
                            <li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data">25</p></div></li>
                              <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data">7 DAYS</p></div></li>
                              <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data">10% OFF</p></div></li>
                          </ul>
                      </div><!-- end detail-slider -->

                      <div class="detail-tabs">
                        <ul class="nav nav-tabs nav-justified">
                              <li class="active"><a href="#tour-information" data-toggle="tab">Tour Information</a></li>
                              <li><a href="#flight" data-toggle="tab">Flight</a></li>
                              <li><a href="#map-overview" data-toggle="tab">View Map</a></li>
                          </ul>

                          <div class="tab-content">

                              <div id="tour-information" class="tab-pane in active">
                                <div class="row">
                                  <div class="col-sm-4 col-md-4 tab-img">
                                      <img src="images/hotel-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" />
                                      </div><!-- end columns -->

                                      <div class="col-sm-8 col-md-8 tab-text">
                                      <h3>Tour Information</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                      </div><!-- end columns -->
                                  </div><!-- end row -->
                              </div><!-- end hotel-overview -->

                              <div id="flight" class="tab-pane">
                                <div class="row">
                                  <div class="col-sm-4 col-md-4 tab-img">
                                      <img src="images/hotel-detail-tab-2.jpg" class="img-responsive" alt="flight-detail-img" />
                                      </div><!-- end columns -->

                                      <div class="col-sm-8 col-md-8 tab-text">
                                      <h3>Flight</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                      </div><!-- end columns -->
                                  </div><!-- end row -->
                              </div><!-- end restaurant -->

                              <div id="map-overview" class="tab-pane">
                                <div class="row">
                                  <div class="col-sm-4 col-md-4 tab-img">
                                      <img src="images/hotel-detail-tab-3.jpg" class="img-responsive" alt="flight-detail-img" />
                                      </div><!-- end columns -->

                                      <div class="col-sm-8 col-md-8 tab-text">
                                      <h3>Our Map</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                      </div><!-- end columns -->
                                  </div><!-- end row -->
                              </div><!-- end pick-up -->

                          </div><!-- end tab-content -->
                      </div><!-- end detail-tabs -->

                      <div class="available-blocks" id="available-tours">
                        <h2>Available Tours</h2>
                        <div class="list-block main-block t-list-block">
                              <div class="list-content">
                                  <div class="main-img list-img t-list-img">
                                      <a href="tour-detail-left-sidebar.html">
                                          <img src="images/tour-list-1.jpg" class="img-responsive" alt="tour-img" />
                                      </a>
                                      <div class="main-mask">
                                          <ul class="list-unstyled list-inline offer-price-1">
                                              <li class="price">$568.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                              <li class="rating">
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star lightgrey"></i></span>
                                              </li>
                                          </ul>
                                      </div><!-- end main-mask -->
                                  </div><!-- end t-list-img -->

                                  <div class="list-info t-list-info">
                                      <h3 class="block-title"><a href="tour-detail-left-sidebar.html">Orlando</a></h3>
                                      <p class="block-minor">2 Adults, 02 Kids</p>
                                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                      <a href="tour-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                   </div><!-- end t-list-info -->
                              </div><!-- end list-content -->
                          </div><!-- end t-list-block -->

                          <div class="list-block main-block t-list-block">
                              <div class="list-content">
                                  <div class="main-img list-img t-list-img">
                                      <a href="tour-detail-left-sidebar.html">
                                          <img src="images/tour-list-2.jpg" class="img-responsive" alt="tour-img" />
                                      </a>
                                      <div class="main-mask">
                                          <ul class="list-unstyled list-inline offer-price-1">
                                              <li class="price">$568.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                              <li class="rating">
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star lightgrey"></i></span>
                                              </li>
                                          </ul>
                                      </div><!-- end main-mask -->
                                  </div><!-- end t-list-img -->

                                  <div class="list-info t-list-info">
                                      <h3 class="block-title"><a href="tour-detail-left-sidebar.html">London</a></h3>
                                      <p class="block-minor">2 Adults, 02 Kids</p>
                                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                      <a href="tour-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                   </div><!-- end t-list-info -->
                              </div><!-- end list-content -->
                          </div><!-- end t-list-block -->

                          <div class="list-block main-block t-list-block">
                              <div class="list-content">
                                  <div class="main-img list-img t-list-img">
                                      <a href="tour-detail-left-sidebar.html">
                                          <img src="images/tour-list-3.jpg" class="img-responsive" alt="tour-img" />
                                      </a>
                                      <div class="main-mask">
                                          <ul class="list-unstyled list-inline offer-price-1">
                                              <li class="price">$568.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                              <li class="rating">
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star lightgrey"></i></span>
                                              </li>
                                          </ul>
                                      </div><!-- end main-mask -->
                                  </div><!-- end t-list-img -->

                                  <div class="list-info t-list-info">
                                      <h3 class="block-title"><a href="tour-detail-left-sidebar.html">Australia</a></h3>
                                      <p class="block-minor">2 Adults, 02 Kids</p>
                                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                      <a href="tour-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                   </div><!-- end t-list-info -->
                              </div><!-- end list-content -->
                          </div><!-- end t-list-block -->

                          <div class="list-block main-block t-list-block">
                              <div class="list-content">
                                  <div class="main-img list-img t-list-img">
                                      <a href="tour-detail-left-sidebar.html">
                                          <img src="images/tour-list-4.jpg" class="img-responsive" alt="tour-img" />
                                      </a>
                                      <div class="main-mask">
                                          <ul class="list-unstyled list-inline offer-price-1">
                                              <li class="price">$568.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                              <li class="rating">
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star orange"></i></span>
                                                  <span><i class="fa fa-star lightgrey"></i></span>
                                              </li>
                                          </ul>
                                      </div><!-- end main-mask -->
                                  </div><!-- end t-list-img -->

                                  <div class="list-info t-list-info">
                                      <h3 class="block-title"><a href="tour-detail-left-sidebar.html">Bangkok</a></h3>
                                      <p class="block-minor">2 Adults, 02 Kids</p>
                                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                      <a href="tour-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                   </div><!-- end t-list-info -->
                              </div><!-- end list-content -->
                          </div><!-- end t-list-block -->

                      </div><!-- end available-tours -->

                      <div class="pages">
                          <ol class="pagination">
                              <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                          </ol>
                      </div><!-- end pages -->
                  </div><!-- end columns -->

              </div><!-- end row -->
        </div><!-- end container -->
      </div><!-- end tour-detail -->
  </section><!-- end innerpage-wrapper -->


  <!--======================= BEST FEATURES =====================-->
  <section id="best-features" class="banner-padding black-features">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                  <span><i class="fa fa-dollar"></i></span>
                    <h3>Best Price Guarantee</h3>
                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                  </div><!-- end b-feature-block -->
             </div><!-- end columns -->

             <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                  <span><i class="fa fa-lock"></i></span>
                    <h3>Safe and Secure</h3>
                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                  </div><!-- end b-feature-block -->
             </div><!-- end columns -->

             <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                  <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Best Travel Agents</h3>
                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                  </div><!-- end b-feature-block -->
             </div><!-- end columns -->

             <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                  <span><i class="fa fa-bars"></i></span>
                    <h3>Travel Guidelines</h3>
                      <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                  </div><!-- end b-feature-block -->
             </div><!-- end columns -->
          </div><!-- end row -->
    </div><!-- end container -->
  </section><!-- end best-features -->


  <!--========================= NEWSLETTER-1 ==========================-->
  <section id="newsletter-1" class="section-padding back-size newsletter">
      <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                  <h2>Subscribe Our Newsletter</h2>
                  <p>Subscibe to receive our interesting updates</p>
                  <form>
                      <div class="form-group">
                          <div class="input-group">
                              <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                              <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                          </div>
                      </div>
                  </form>
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section><!-- end newsletter-1 -->
@endsection
