
<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-travel/flight-detail-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 03:03:42 GMT -->
<head>
        <title>Flight Detail Right Sidebar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">

        <!-- Color Panel -->
        <link rel="stylesheet" href="css/jquery.colorpanel.css">

        <!-- Slick Stylesheet -->
		<link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
    </head>


    <body>

        <!--====== LOADER =====-->
        <div class="loader"></div>


        <!--========== COLOR-PANEL ==========-->
        <div id="colorPanel" class="colorPanel">
            <a id="cpToggle" href="#"></a>
            <ul></ul>
        </div><!-- end colorPanel -->


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
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li><a href="login.html"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li>
                                	<form>
                                    	<ul class="list-inline">
                                        	<li>
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
											</li>

                                            <li>
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">FR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
										</ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
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
                    <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                </div><!-- end navbar-header -->

                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index-2.html">Main Homepage</a></li>
                                <li><a href="flight-homepage.html">Flight Homepage</a></li>
                                <li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a href="car-homepage.html">Car Homepage</a></li>
                                <li><a href="landing-page.html">Landing Page</a></li>
                                <li><a href="travel-agency-homepage.html">Travel Agency Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Flight<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="flight-homepage.html">Flight Homepage</a></li>
                                <li><a href="flight-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="flight-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="flight-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="flight-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="flight-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li class="active"><a href="#">Detail Right Sidebar</a></li>
                                <li><a href="flight-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a href="flight-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a href="flight-search-result.html">Search Result</a></li>
                                <li><a href="flight-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotel<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a href="hotel-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="hotel-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a href="hotel-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a href="hotel-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a href="hotel-search-result.html">Search Result</a></li>
                                <li><a href="hotel-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tour<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a href="tour-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="tour-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="tour-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="tour-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a href="tour-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a href="tour-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a href="tour-search-result.html">Search Result</a></li>
                                <li><a href="tour-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cruise<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a href="cruise-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="cruise-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="cruise-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="cruise-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="cruise-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="cruise-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a href="cruise-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a href="cruise-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a href="cruise-search-result.html">Search Result</a></li>
                                <li><a href="cruise-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Car<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                            	<li><a href="car-homepage.html">Car Homepage</a></li>
                                <li><a href="car-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="car-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="car-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="car-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="car-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="car-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a href="car-booking-left-sidebar.html">Booking Left Sidebar</a></li>
                                <li><a href="car-booking-right-sidebar.html">Booking Right Sidebar</a></li>
                                <li><a href="car-search-result.html">Search Result</a></li>
                                <li><a href="car-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Header</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-header-style-1.html">Header Style 1</a></li>
                                        <li><a href="feature-header-style-2.html">Header Style 2</a></li>
                                        <li><a href="feature-header-style-3.html">Header Style 3</a></li>
                                        <li><a href="feature-header-style-4.html">Header Style 4</a></li>
                                        <li><a href="feature-header-style-5.html">Header Style 5</a></li>
                                        <li><a href="feature-header-style-6.html">Header Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Page Title</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-page-title-style-1.html">Page Title Style 1</a></li>
                                        <li><a href="feature-page-title-style-2.html">Page Title Style 2</a></li>
                                        <li><a href="feature-page-title-style-3.html">Page Title Style 3</a></li>
                                        <li><a href="feature-page-title-style-4.html">Page Title Style 4</a></li>
                                        <li><a href="feature-page-title-style-5.html">Page Title Style 5</a></li>
                                        <li><a href="feature-page-title-style-6.html">Page Title Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Footer</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-footer-style-1.html">Footer Style 1</a></li>
                                        <li><a href="feature-footer-style-2.html">Footer Style 2</a></li>
                                        <li><a href="feature-footer-style-3.html">Footer Style 3</a></li>
                                        <li><a href="feature-footer-style-4.html">Footer Style 4</a></li>
                                        <li><a href="feature-footer-style-5.html">Footer Style 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="blog-listing-left-sidebar.html">Blog Listing Left Sidebar</a></li>
                                        <li><a href="blog-listing-right-sidebar.html">Blog Listing Right Sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">Blog Detail Left Sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">Blog Detail Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                        <li><a href="gallery-2-columns.html">Gallery 2 Columns</a></li>
                                        <li><a href="gallery-3-columns.html">Gallery 3 Columns</a></li>
                                        <li><a href="gallery-4-columns.html">Gallery 4 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Forms</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="login-1.html">Login 1</a></li>
                                        <li><a href="login-2.html">Login 2</a></li>
                                        <li><a href="registration-1.html">Registration 1</a></li>
                                        <li><a href="registration-2.html">Registration 2</a></li>
                                        <li><a href="forgot-password-1.html">Forgot Password 1</a></li>
                                        <li><a href="forgot-password-2.html">Forgot Password 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header">Standard <span>Pages</span></li>
                                                <li><a href="about-us-1.html">About Us 1</a></li>
                                                <li><a href="about-us-2.html">About Us 2</a></li>
                                                <li><a href="services-1.html">Services 1</a></li>
                                                <li><a href="services-2.html">Services 2</a></li>
                                                <li><a href="team-1.html">Our Team 1</a></li>
                                                <li><a href="team-2.html">Our Team 2</a></li>
                                				<li><a href="contact-us-1.html">Contact Us 1</a></li>
                                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header">User <span>Dashboard</span></li>
                                                <li><a href="dashboard-1.html">Dashboard 1</a></li>
                                                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="booking.html">Booking</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cards.html">Cards</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header">Special <span>Pages</span></li>
                                                <li><a href="error-page-1.html">404 Page 1</a></li>
                                                <li><a href="error-page-2.html">404 Page 2</a></li>
                                                <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                                <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                                <li><a href="faq-left-sidebar.html">FAQ Left Sidebar</a></li>
                                                <li><a href="faq-right-sidebar.html">FAQ Right Sidebar</a></li>
                                                <li><a href="testimonials-1.html">Testimonials 1</a></li>
                                                <li><a href="testimonials-2.html">Testimonials 2</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-3">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-header">Extra <span>Pages</span></li>
                                                <li><a href="before-you-fly.html">Before Fly</a></li>
                                                <li><a href="travel-insurance.html">Travel Insurance</a></li>
                                                <li><a href="travel-guide.html">Travel Guide</a></li>
                                                <li><a href="holidays.html">Holidays</a></li>
                                                <li><a href="thank-you.html">Thank You</a></li>
                                                <li><a href="payment-success.html">Payment Success</a></li>
                                                <li><a href="pricing-table-1.html">Pricing Table 1</a></li>
                                                <li><a href="pricing-table-2.html">Pricing Table 2</a></li>
                                                <li><a href="popup-ad.html">Popup Ad</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->

        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                	<div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->

                    <div class="list-group panel">

                        <a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="home-links">
                            <a href="index-2.html" class="list-group-item">Main Homepage</a>
                            <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                            <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                            <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                            <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                            <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                            <a href="landing-page.html" class="list-group-item">Landing Page</a>
                            <a href="travel-agency-homepage.html" class="list-group-item">Travel Agency Page</a>
                        </div><!-- end sub-menu -->

                        <a href="#flights-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="flights-links">
                            <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                            <a href="flight-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="flight-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="flight-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="flight-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="flight-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="#" class="list-group-item active">Detail Right Sidebar</a>
                        </div><!-- end sub-menu -->

                        <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="hotels-links">
                            <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                            <a href="hotel-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="hotel-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="hotel-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="hotel-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="hotel-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="hotel-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            <a href="hotel-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>
                            <a href="hotel-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>
                            <a href="hotel-search-result.html" class="list-group-item">Search Result</a>
                            <a href="hotel-offers.html" class="list-group-item">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>


                        <div class="collapse sub-menu" id="tours-links">
                            <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                            <a href="tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="tour-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="tour-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="tour-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="tour-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="tour-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            <a href="tour-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>
                            <a href="tour-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>
                            <a href="tour-search-result.html" class="list-group-item">Search Result</a>
                            <a href="tour-offers.html" class="list-group-item">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cruise-links">
                            <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                            <a href="cruise-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="cruise-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="cruise-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="cruise-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="cruise-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="cruise-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            <a href="cruise-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>
                            <a href="cruise-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>
                            <a href="cruise-search-result.html" class="list-group-item">Search Result</a>
                            <a href="cruise-offers.html" class="list-group-item">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a href="#cars-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cars-links">
                            <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                            <a href="car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="car-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                            <a href="car-booking-left-sidebar.html" class="list-group-item">Booking Left Sidebar</a>
                            <a href="car-booking-right-sidebar.html" class="list-group-item">Booking Right Sidebar</a>
                            <a href="car-search-result.html" class="list-group-item">Search Result</a>
                            <a href="car-offers.html" class="list-group-item">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a href="#features-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-puzzle-piece link-icon"></i></span>Features<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu" id="features-links">
                            <a href="#header-style-links" class="list-group-item" data-toggle="collapse">Header<span><i class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="header-style-links">
                            	<a href="feature-header-style-1.html" class="list-group-item">Header Style 1</a>
                                <a href="feature-header-style-2.html" class="list-group-item">Header Style 2</a>
                                <a href="feature-header-style-3.html" class="list-group-item">Header Style 3</a>
                                <a href="feature-header-style-4.html" class="list-group-item">Header Style 4</a>
                                <a href="feature-header-style-5.html" class="list-group-item">Header Style 5</a>
                                <a href="feature-header-style-6.html" class="list-group-item">Header Style 6</a>
                            </div>
                            <a href="#page-title-style-links" class="list-group-item" data-toggle="collapse">Page Title<span><i class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="page-title-style-links">
                            	<a href="feature-page-title-style-1.html" class="list-group-item">Page Title Style 1</a>
                                <a href="feature-page-title-style-2.html" class="list-group-item">Page Title Style 2</a>
                                <a href="feature-page-title-style-3.html" class="list-group-item">Page Title Style 3</a>
                                <a href="feature-page-title-style-4.html" class="list-group-item">Page Title Style 4</a>
                                <a href="feature-page-title-style-5.html" class="list-group-item">Page Title Style 5</a>
                                <a href="feature-page-title-style-6.html" class="list-group-item">Page Title Style 6</a>
                            </div>
                            <a href="#footer-style-links" class="list-group-item" data-toggle="collapse">Footer<span><i class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="footer-style-links">
                            	<a href="feature-footer-style-1.html" class="list-group-item">Footer Style 1</a>
                                <a href="feature-footer-style-2.html" class="list-group-item">Footer Style 2</a>
                                <a href="feature-footer-style-3.html" class="list-group-item">Footer Style 3</a>
                                <a href="feature-footer-style-4.html" class="list-group-item">Footer Style 4</a>
                                <a href="feature-footer-style-5.html" class="list-group-item">Footer Style 5</a>
                            </div>
                            <a href="#f-blog-links" class="list-group-item" data-toggle="collapse">Blog<span><i class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="f-blog-links">
                                <a href="blog-listing-left-sidebar.html" class="list-group-item">Blog Listing Left Sidebar</a>
                                <a href="blog-listing-right-sidebar.html" class="list-group-item">Blog Listing Right Sidebar</a>
                                <a href="blog-detail-left-sidebar.html" class="list-group-item">Blog Detail Left Sidebar</a>
                                <a href="blog-detail-right-sidebar.html" class="list-group-item">Blog Detail Right Sidebar</a>
                            </div>
                            <a href="#f-gallery-links" class="list-group-item" data-toggle="collapse">Gallery<span><i class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="f-gallery-links">
                                <a href="gallery-masonry.html" class="list-group-item">Gallery Masonry</a>
                                <a href="gallery-2-columns.html" class="list-group-item">Gallery 2 Columns</a>
                                <a href="gallery-3-columns.html" class="list-group-item">Gallery 3 Columns</a>
                                <a href="gallery-4-columns.html" class="list-group-item">Gallery 4 Columns</a>
                            </div>
                            <a href="#f-forms-links" class="list-group-item" data-toggle="collapse">Forms<span><i class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="f-forms-links">
                                <a href="login-1.html" class="list-group-item">Login 1</a>
                                <a href="login-2.html" class="list-group-item">Login 2</a>
                                <a href="registration-1.html" class="list-group-item">Registration 1</a>
                                <a href="registration-2.html" class="list-group-item">Registration 2</a>
                                <a href="forgot-password-1.html" class="list-group-item">Forgot Password 1</a>
                                <a href="forgot-password-2.html" class="list-group-item">Forgot Password 2</a>
                            </div>
                        </div><!-- end sub-menu -->

                        <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="pages-links">
                        	<div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                            <a href="about-us-1.html" class="list-group-item">About Us 1</a>
                            <a href="about-us-2.html" class="list-group-item">About Us 2</a>
                            <a href="services-1.html" class="list-group-item">Services 1</a>
                            <a href="services-2.html" class="list-group-item">Services 2</a>
                            <a href="team-1.html" class="list-group-item">Our Team 1</a>
                            <a href="team-2.html" class="list-group-item">Our Team 2</a>
                            <a href="contact-us-1.html" class="list-group-item">Contact Us 1</a>
                            <a href="contact-us-2.html" class="list-group-item">Contact Us 2</a>
                            <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                            <a href="dashboard-1.html" class="list-group-item">Dashboard 1</a>
                            <a href="dashboard-2.html" class="list-group-item">Dashboard 2</a>
                            <a href="user-profile.html" class="list-group-item">User Profile</a>
                            <a href="booking.html" class="list-group-item">Booking</a>
                            <a href="wishlist.html" class="list-group-item">Wishlist</a>
                            <a href="cards.html" class="list-group-item">Cards</a>
                            <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                            <a href="error-page-1.html" class="list-group-item">404 Page 1</a>
                            <a href="error-page-2.html" class="list-group-item">404 Page 2</a>
                            <a href="coming-soon-1.html" class="list-group-item">Coming Soon 1</a>
                            <a href="coming-soon-2.html" class="list-group-item">Coming Soon 2</a>
                            <a href="faq-left-sidebar.html" class="list-group-item">FAQ Left Sidebar</a>
                            <a href="faq-right-sidebar.html" class="list-group-item">FAQ Right Sidebar</a>
                            <a href="testimonials-1.html" class="list-group-item">Testimonials 1</a>
                            <a href="testimonials-2.html" class="list-group-item">Testimonials 2</a>
                            <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                            <a href="before-you-fly.html" class="list-group-item">Before Fly</a>
                            <a href="travel-insurance.html" class="list-group-item">Travel Insurance</a>
                            <a href="travel-guide.html" class="list-group-item">Travel Guide</a>
                            <a href="holidays.html" class="list-group-item">Holidays</a>
                            <a href="thank-you.html" class="list-group-item">Thank You</a>
                            <a href="payment-success.html" class="list-group-item">Payment Success</a>
                            <a href="pricing-table-1.html" class="list-group-item">Pricing Table 1</a>
                            <a href="pricing-table-2.html" class="list-group-item">Pricing Table 2</a>
                            <a href="popup-ad.html" class="list-group-item">Popup Ad</a>
                        </div><!-- end sub-menu -->
                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->


        <!--================== PAGE-COVER ================-->
        <section class="page-cover" id="cover-flight-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Flight Detail Right Sidebar</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Flight Detail Right Sidebar</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->


        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="flight-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

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
                                	<li><div class="f-icon"><i class="fa fa-plane"></i></div><div class="f-text"><p class="f-heading">From</p><p class="f-data">Sydney</p></div></li>
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

                            <div class="available-blocks" id="available-seats">
                            	<h2>Available Seats</h2>
                            	<div class="list-block main-block seat-block">
                                    <div class="list-content">
                                        <div class="main-img list-img seat-img">
                                            <a href="#">
                                                <img src="images/available-seat-1.jpg" class="img-responsive" alt="seat-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$29.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end seat-img -->

                                        <div class="list-info seat-info">
                                            <h3 class="block-title"><a href="#">Advanced Seats</a></h3>
                                            <p class="block-minor">Flexible</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end seat-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end seat-block -->

                                <div class="list-block main-block seat-block">
                                    <div class="list-content">
                                        <div class="main-img list-img seat-img">
                                            <a href="#">
                                                <img src="images/available-seat-2.jpg" class="img-responsive" alt="seat-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$38.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end seat-img -->

                                        <div class="list-info seat-info">
                                            <h3 class="block-title"><a href="#">Panel Seats</a></h3>
                                            <p class="block-minor">Flexible</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end seat-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end seat-block -->

                                <div class="list-block main-block seat-block">
                                    <div class="list-content">
                                        <div class="main-img list-img seat-img">
                                            <a href="#">
                                                <img src="images/available-seat-3.jpg" class="img-responsive" alt="seat-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$36.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end seat-img -->

                                        <div class="list-info seat-info">
                                            <h3 class="block-title"><a href="#">Standard Seats</a></h3>
                                            <p class="block-minor">Flexible</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end seat-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end seat-block -->

                                <div class="list-block main-block seat-block">
                                    <div class="list-content">
                                        <div class="main-img list-img seat-img">
                                            <a href="#">
                                                <img src="images/available-seat-4.jpg" class="img-responsive" alt="seat-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">$25.00<span class="divider">|</span><span class="pkg">Starting</span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end seat-img -->

                                        <div class="list-info seat-info">
                                            <h3 class="block-title"><a href="#">Standard Seats</a></h3>
                                            <p class="block-minor">Flexible</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                            <a href="#" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end seat-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end seat-block -->

                            </div><!-- end available-seats -->


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

                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">$568.00 <span>FR 5379</span></h2>

                            	<div class="booking-form">
                                	<h3>Book Flight</h3>
                                    <p>Find your dream flight today</p>

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

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end flight-details -->
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


        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

            <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">CONTACT US</h3>
                            <ul class="list-unstyled">
                            	<li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            	<li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                                <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                            	<li><a href="#">Home</a></li>
                            	<li><a href="#">Flight</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cruise</a></li>
                                <li><a href="#">Cars</a></li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        	<h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                            	<li><a href="#">Blogs</a></li>
                            	<li><a href="#">Contact Us</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                            <h3 class="footer-heading">ABOUT US</h3>
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
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.colorpanel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <script src="js/custom-slick.js"></script>
        <!-- Page Scripts Ends -->
    </body>

<!-- Mirrored from kiswa.net/themes/star-travel/flight-detail-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 03:03:42 GMT -->
</html>