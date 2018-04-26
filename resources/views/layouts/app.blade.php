@php
  $pageActive = Request::session()->get('pageActive');
@endphp

<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- Mirrored from kiswa.net/themes/star-travel/car-homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 03:01:55 GMT -->
<head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Pemuncak.com | @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <!-- Flaticon Stylesheet -->
        <link rel="stylesheet" href="{{ asset('fonts/font/flaticon.css') }}">

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" id="cpswitch" href="{{ asset('css/orange.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">

        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" />

        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">

        <!-- Slick Stylesheet -->
		    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">


        <!-- Color Panel -->
        <link rel="stylesheet" href="{{ asset('css/jquery.colorpanel.css') }}">
    </head>


    <body id="car-homepage" ng-app="doc">

        <!--====== LOADER =====-->
        <div class="loader"></div>


    	<!--======== SEARCH-OVERLAY =========-->
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->


        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-grey">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            {{-- <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul> --}}
                        </div><!-- end info -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                @if (Auth::guest())
                                  <li><a href="{{ url('login') }}"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                  <li><a href="{{ url('register') }}"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                @else
                                  <li><a href="{{ url('dashboard') }}"> <i class="fa fa-user-circle"></i></span>{{ Auth::user()->first_name }}</a> </a></li>
                                  <li>
                                      <ul class="list-inline">

                                        <li>
                                          <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> Logout
                                          </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                      </ul>
                                @endif
                                    <li>
                                      <a href="#">
                                        <i class="fa fa-question-circle"></i>
                                      </a>
                                    </li>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->


		<!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-3">

            <div class="header-absolute">
                <nav class="navbar navbar-default main-navbar navbar-custom navbar-black" id="mynavbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" id="menu-button">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <div class="header-search hidden-lg">
                                <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                            </div>
                            <a href="{{ url('') }}" class="navbar-brand"><span><i class="fa flaticon-people flaticon-title"></i>PEMUNCAK</span>.COM</a>
                        </div><!-- end navbar-header -->

                        <div class="collapse navbar-collapse" id="myNavbar1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="@if ($pageActive == "home")
                                  {{ "active" }}
                                @endif">
                                  <a href="{{ url('') }}">Home</a>
                                </li>
                                <li class="@if ($pageActive == "adventures")
                                  {{ "active" }}
                                @endif">
                                  <a href="{{ url('adventures') }}">Adventures</a>
                                </li>
                                <li class="@if ($pageActive == "destinations")
                                  {{ "active" }}
                                @endif">
                                  <a href="{{ url('destinations') }}">Destinations</a>
                                </li>
                                <li class="@if ($pageActive == "camping")
                                  {{ "active" }}
                                @endif">
                                  <a href="{{ url('camping') }}">camping</a>
                                </li>
                                <li class="@if ($pageActive == "news")
                                  {{ "active" }}
                                @endif">
                                  <a href="{{ url('news') }}">News</a>
                                </li>
                                <li class="@if ($pageActive == "blog")
                                  {{ "active" }}
                                @endif">
                                  <a href="{{ url('blog') }}">Blog</a>
                                </li>
                                <li class="@if ($pageActive == "about")
                                  {{ "active" }}
                                @endif">
                                  <a href="{{ url('about') }}">About</a>
                                </li>
                                {{-- <li>
                                  <a href="{{ url('about') }}">About</a>
                                </li>
                                <li>
                                  <a href="{{ url('faq') }}">FaQ</a>
                                </li> --}}
                                {{-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i class="fa fa-angle-down"></i></span></a>
                                	<ul class="dropdown-menu mega-dropdown-menu row">
                                        <li>

                                        </li>
                                    </ul>
                                </li> --}}
                                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                            </ul>
                        </div><!-- end navbar collapse -->
                    </div><!-- end container -->
                 </nav><!-- end navbar -->
        	</div><!-- end header-absolute -->

            @yield('content')

            <div class="sidenav-content">
              <div id="mySidenav" class="sidenav" >
                  <h2 id="web-name"><span><i class="fa flaticon-people flaticon-title"></i>PEMUNCAK</span>.COM</h2>

                  <div id="main-menu">
                  	<div class="closebtn">
                          <button class="btn btn-default" id="closebtn">&times;</button>
                      </div><!-- end close-btn -->

                      <div class="list-group panel">

                          <a href="#home-links" class="list-group-item active"><span><i class="fa fa-home link-icon"></i></span>Home<span></span></a>
                          <a href="#flights-links" class="list-group-item"><span><i class="fa fa-plane link-icon"></i></span>Weather Forecast<span></span></a>
                          <a href="#flights-links" class="list-group-item"><span><i class="fa fa-plane link-icon"></i></span>Destinations<span></span></a>
                          <a href="#flights-links" class="list-group-item"><span><i class="fa fa-plane link-icon"></i></span>Tools Climbing<span></span></a>
                          <a href="#flights-links" class="list-group-item"><span><i class="fa fa-plane link-icon"></i></span>Blog<span></span></a>
                          <a href="#flights-links" class="list-group-item"><span><i class="fa fa-plane link-icon"></i></span>News<span></span></a>

                      </div><!-- end list-group -->
                  </div><!-- end main-menu -->
              </div><!-- end mySidenav -->
          </div><!-- end sidenav-content -->



        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">

            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-widget ftr-about ftr-our-company">
                            <h3 class="footer-heading">OUR COMPANY</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                            <ul class="social-links list-inline list-unstyled">
                            	<li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            	<li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 footer-widget ftr-map">
                            <div class="map">
                                <iframe src=		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                            </div>
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                            	<li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->

        </section><!-- end footer -->


        <!-- Page Scripts Starts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/angular.min.js') }}"></script>
        <script src="{{ asset('js/jquery.colorpanel.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/custom-navigation.js') }}"></script>
        <script src="{{ asset('js/custom-flex.js') }}"></script>
        <script src="{{ asset('js/custom-owl.js') }}"></script>
        <script src="{{ asset('js/custom-date-picker.js') }}"></script>
        <script src="{{ asset('js/custom-slick.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>
        <!-- Page Scripts Ends -->

    </body>

<!-- Mirrored from kiswa.net/themes/star-travel/car-homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 03:02:06 GMT -->
</html>
