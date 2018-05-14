@extends('layouts.app')

@section('title')
  Home
@endsection

@section('menu-' . $menu_active)
  active
@endsection

@section('content')
  <section class="flexslider-container" id="flexslider-container-4">

      <div class="flexslider slider tour-slider" id="slider-4">
          <ul class="slides">

              <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/destination-1.jpg) 50% 15%;background-size:cover;height:100%;">
                <div class="meta">
                      <div class="container">
                        <span class="highlight-price highlight-2">STARTING FROM 1200$ ONLY</span>
                          <h2>Papandayan</h2>
                          <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                      </div><!-- end container -->
                  </div><!-- end meta -->
              </li><!-- end item-1 -->

              <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(images/destination-2.jpg) 50% 15%;background-size:cover;height:100%;">
                  <div class=" meta">
                      <div class="container">
                        <span class="highlight-price highlight-2">STARTING FROM 1200$ ONLY</span>
                          <h2>Salak</h2>
                          <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                      </div><!-- end container -->
                  </div><!-- end meta -->
              </li><!-- end item-2 -->

          </ul>
      </div><!-- end slider -->

      <div class="search-tabs" id="search-tabs-4">
        <div class="container">
              <div class="row">
                  <div class="col-sm-12">

                      <ul class="nav nav-tabs">
                          <li><a href="#custom" data-toggle="tab"><span><i class="fa flaticon-trekking"></i></span><span class="st-text">Custom</span></a></li>
                          <li class="active"><a href="#adventures" data-toggle="tab"><span><i class="fa flaticon-hiking"></i></span><span class="st-text">Adventures</span></a></li>
                          <li><a href="#camping" data-toggle="tab"><span><i class="fa flaticon-tent"></i></span><span class="st-text">Camping</span></a></li>
                      </ul>

                      <div class="tab-content">

                          <div id="custom" class="tab-pane">
                              <form>
                                  <div class="row">

                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                          <div class="form-group right-icon">
                                              <select class="form-control" name="">
                                                <option value="">Destinations</option>
                                              </select>
                                              <i class="fa fa-angle-down"></i>
                                          </div>
                                      </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                        <div class="form-group left-icon">
                                            <input type="text" class="form-control dpd1" placeholder="Check In">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                      </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 search-btn">
                                          <button class="btn btn-orange" style="width:100%;">Check Weather</button>
                                      </div><!-- end columns -->

                                  </div><!-- end row -->
                              </form>
                          </div><!-- end custom -->

                          <div id="adventures" class="tab-pane active">
                            <form class="" action="{{ url('login') }}" id="formm" method="post">
                              {{ csrf_field() }}
                              <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                  <div class="form-group left-icon">
                                      <input type="text" class="form-control" placeholder="USERNAME" style="text-transform: none;" name="username" value="{{ old('username') }}">
                                      <i class="fa fa-user-circle"></i>
                                  </div>

                                  @if ($errors->has('username'))
                                      <span class="help-block">
                                          <strong class="text-danger"> <i class="fa fa-warning"></i> {{ $errors->first('username') }}</strong>
                                      </span>
                                  @endif

                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                  <div class="form-group left-icon">
                                      <input type="password" class="form-control" placeholder="PASSWORD" style="text-transform: none;" name="password">
                                      <i class="fa fa-lock"></i>

                                  </div>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                    <button class="btn btn-orange" style="width:100%;" name="button" value="submit" type="submit">Start</button>
                                </div><!-- end columns -->

                              </div>
                            </form>
                          </div>

                          <div id="camping" class="tab-pane">
                              <form>
                                  <div class="row">

                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                          <div class="form-group right-icon">
                                              <select class="form-control" name="">
                                                <option value="">All Destinations</option>
                                              </select>
                                              <i class="fa fa-angle-down"></i>
                                          </div>
                                      </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2">
                                        <div class="form-group left-icon">
                                            <input type="text" class="form-control dpd1" placeholder="Check In">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                      </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2">
                                        <div class="form-group left-icon">
                                            <input type="text" class="form-control dpd1" placeholder="Check Out">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                      </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                          <div class="form-group right-icon">
                                              <select class="form-control" name="">
                                                <option value="">CAMPERS</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                              </select>
                                              <i class="fa fa-angle-down"></i>
                                          </div>
                                      </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 search-btn">
                                          <button class="btn btn-orange" style="width:100%;">Search Packets</button>
                                      </div><!-- end columns -->

                                  </div><!-- end row -->
                              </form>
                          </div><!-- end camping -->

                      </div><!-- end tab-content -->
                  </div><!-- end columns -->
              </div><!-- end row -->
          </div><!-- end container -->
      </div><!-- end search-tabs -->

  </section><!-- end flexslider-container -->


  <section id="tour-offers" class="section-padding">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12">
              	<div class="page-heading">
                  	<h2>Favorite Destinations</h2>
                      <hr class="heading-line" />
                  </div><!-- end page-heading -->

                   <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                     @foreach ($data['favorite_destinations'] as $favdes)
                       <div class="item">
                         <div class="main-block tour-block">
                           <div class="main-img">
                             <a href="{{ route('destination_detail', ['id' => $favdes->id]) }}">
                               <img src="{{ asset('upload/img/destinations/poster/' . $favdes->poster) }}" class="img-responsive" alt="tour-img" style="height: 200px; object-fit: cover;"/>
                             </a>
                           </div><!-- end offer-img -->

                           <div class="offer-price-2">
                             <ul class="list-unstyled">
                               <li class="price">$568.00<a href="{{ route('destination_detail', ['id' => $favdes->id]) }}" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                             </ul>
                           </div><!-- end offer-price-2 -->

                           <div class="main-info tour-info">
                             <div class="main-title tour-title">
                               <a href="tour-detail-right-sidebar.html">{{ $favdes->name }}</a>
                               <p>
                                 <i class="fa fa-map-marker"></i>
                                 {{ $favdes->regional->name . " - " . $favdes->province->name }}
                               </p>
                               <div class="rating">
                                 <span><i class="fa fa-star orange"></i></span>
                                 <span><i class="fa fa-star orange"></i></span>
                                 <span><i class="fa fa-star orange"></i></span>
                                 <span><i class="fa fa-star orange"></i></span>
                                 <span><i class="fa fa-star grey"></i></span>
                               </div>
                             </div><!-- end tour-title -->
                           </div><!-- end tour-info -->
                         </div><!-- end tour-block -->
                       </div><!-- end item -->
                     @endforeach
                  </div><!-- end owl-tour-offers -->

                  <div class="view-all text-center">
                  	<a href="{{ route('destination') }}" class="btn btn-black">View All</a>
                  </div><!-- end view-all -->
              </div><!-- end columns -->
          </div><!-- end row -->
  	</div><!-- end container -->
  </section><!-- end tour-offers -->

  <!--======================= BEST FEATURES ======================-->
  <section id="best-features" class="banner-padding orange-features">
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

  <!--================ HOT-TOUR ==============-->
  <section id="hot-tour" class="section-padding">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12 col-md-12 col-lg-7 hot-tour-carousel">
        	<div id="hot-tour-carousel" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                    	<img src="images/hot-tour-1.jpg" alt="Los Angeles">
                    </div>

                    <div class="item">
                    	<img src="images/hot-tour-2.jpg" alt="Chicago">
                    </div>
                </div><!-- end carousel-inner -->

                <a class="left carousel-control" href="#hot-tour-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#hot-tour-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- end hot-tour-carousel -->
        </div><!-- end columns -->

        <div class="col-sm-12 col-md-12 col-lg-5 hot-tour-text">
        	<h3>Hot Offer</h3>
            <h2 class="hot-tour-title">Playa Paraiso, Cuba</h2>
            <p>2300$ / 2 Persons / 7 Nights</p>
            <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Start Adventure</a>
            <a href="tour-detail-right-sidebar.html" class="btn btn-details">See Details</a>
        </div><!-- end columns -->

    </div><!-- end row -->
  </div><!-- end container -->
  </section><!-- end hot-tour -->

  <!--=================== PACKAGES ================-->
  <section id="tour-packages" class="section-padding">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="page-heading">
                  	<h2>Top Tour Packages</h2>
                      <hr class="heading-line" />
                  </div><!-- end page-heading -->

                  <div class="row" id="tour-package-tables">

                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
                          <div class="package tour-package">
                              <div class="t-pkg-heading">
                                  <h2 class="t-pkg-title">Single</h2>
                                  <h2 class="t-pkg-price">$199 / Night</h2>
                              </div><!-- end t-pkg-heading -->

                              <div class="pkg-features">
                                  <ul class="list-unstyled text-center">
                                      <li>Breakfast</li>
                                      <li>Private Balcony</li>
                                      <li>Sea View</li>
                                      <li>Free Wifi</li>
                                      <li>Bathroom</li>
                                      <li>Water Heated pool</li>
                                  </ul>
                                  <button class="btn">Select Package</button>
                              </div><!-- end features -->
                          </div><!-- end tour-package -->
                      </div><!-- end columns -->

                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
                          <div class="package tour-package  best-package">
                              <div class="t-pkg-heading">
                                  <h2 class="t-pkg-title">Double</h2>
                                  <h2 class="t-pkg-price">$199 / Night</h2>
                              </div><!-- end t-pkg-heading -->

                              <div class="pkg-features">
                                  <ul class="list-unstyled text-center">
                                      <li>Breakfast</li>
                                      <li>Private Balcony</li>
                                      <li>Sea View</li>
                                      <li>Free Wifi</li>
                                      <li>Bathroom</li>
                                      <li>Water Heated pool</li>
                                  </ul>
                                  <button class="btn">Select Package</button>
                              </div><!-- end features -->
                          </div><!-- end tour-package -->
                      </div><!-- end columns -->

                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
                          <div class="package tour-package">
                              <div class="t-pkg-heading">
                                  <h2 class="t-pkg-title">Family</h2>
                                  <h2 class="t-pkg-price">$199 / Night</h2>
                              </div><!-- end t-pkg-heading -->

                              <div class="pkg-features">
                                  <ul class="list-unstyled text-center">
                                      <li>Breakfast</li>
                                      <li>Private Balcony</li>
                                      <li>Sea View</li>
                                      <li>Free Wifi</li>
                                      <li>Bathroom</li>
                                      <li>Water Heated pool</li>
                                  </ul>
                                  <button class="btn">Select Package</button>
                              </div><!-- end features -->
                          </div><!-- end tour-package -->
                      </div><!-- end columns -->

                  </div><!-- end row -->
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section><!-- end tour-packages -->

  <!--=============== TESTIMONIALS ===============-->
  <section id="testimonials" class="section-padding">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12">
              	<div class="page-heading white-heading">
                  	<h2>Testimonials</h2>
                      <hr class="heading-line" />
                  </div><!-- end page-heading -->

                  <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                      <div class="carousel-inner text-center">

                          <div class="item active">
                              <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                              <div class="rating">
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star lightgrey"></i></span>
                              </div><!-- end rating -->

                              <small>Jhon Smith</small>
                          </div><!-- end item -->

                          <div class="item">
                              <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                              <div class="rating">
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star lightgrey"></i></span>
                              </div><!-- end rating -->

                              <small>Jhon Smith</small>
                          </div><!-- end item -->

                          <div class="item">
                              <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                              <div class="rating">
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star orange"></i></span>
                                  <span><i class="fa fa-star lightgrey"></i></span>
                              </div><!-- end rating -->

                              <small>Jhon Smith</small>
                          </div><!-- end item -->

                      </div><!-- end carousel-inner -->

                      <ol class="carousel-indicators">
                          <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="images/client-1.jpg" class="img-responsive"  alt="client-img">
                          </li>
                          <li data-target="#quote-carousel" data-slide-to="1"><img src="images/client-2.jpg" class="img-responsive"  alt="client-img">
                          </li>
                          <li data-target="#quote-carousel" data-slide-to="2"><img src="images/client-3.jpg" class="img-responsive"  alt="client-img">
                          </li>
                      </ol>

                  </div><!-- end quote-carousel -->
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section><!-- end testimonials -->

  <!--============== HIGHLIGHTS =============-->
  <section id="highlights" class="highlights-2 highlights-grey">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="row">
                      <div id="boxes">

                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="highlight-box">
                                  <div class="h-icon">
                                      <span><i class="fa fa-plane"></i></span>
                                  </div><!-- end h-icon -->

                                  <div class="h-text">
                                      <span class="numbers">2496</span>
                                      <p>Outstanding Tours</p>
                                  </div><!-- end h-text -->
                              </div><!-- end highlight-box -->
                          </div><!-- end columns -->

                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="highlight-box">
                                  <div class="h-icon">
                                      <span><i class="fa fa-ship"></i></span>
                                  </div><!-- end h-icon -->

                                  <div class="h-text cruise">
                                      <span class="numbers">1906</span>
                                      <p>Worldwide Cruise</p>
                                  </div><!-- end h-text -->
                              </div><!-- end highlight-box -->
                          </div><!-- end columns -->

                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="highlight-box">
                                  <div class="h-icon">
                                      <span><i class="fa fa-taxi"></i></span>
                                  </div><!-- end h-icon -->

                                  <div class="h-text taxi">
                                      <span class="numbers">2033</span>
                                      <p>Luxury Car Booking</p>
                                  </div><!-- end h-text -->
                              </div><!-- end highlight-box -->
                          </div><!-- end columns -->

                      </div><!-- end boxes -->
              	</div><!-- end row -->
      		</div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section><!-- end highlights -->
@endsection
