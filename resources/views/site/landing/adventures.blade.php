@extends('layouts.app')

@section('title')
  Adventures
@endsection

@section('content')
  <section class="page-cover style cover-navbar-wrapper pt-164" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)), url(../images/destination-3.jpg) 50% 60%;">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
              	<h1 class="page-title">ADVENTURES</h1>
                  <ul class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Adventures</li>
                  </ul>
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section>


  <div id="process-flow" class="innerpage-banner-padding">
    <div class="container">
			<div class="row">
            	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <ul class="list-unstyled process">
                        <li>
                            <div class="process-block">
                                <span><i class="fa fa-search"></i></span>
                                <h3>Search</h3>
                                <p>Pork bresaola meatloaf tongue, landjaeger tail andouille strip steak tenderloin sausage chicken tri-tip et dolore magna aliqua. </p>
                            </div><!-- end process-block -->
                        </li>

                        <li>
                            <div class="process-block">
                                <span><i class="fa fa-book"></i></span>
                                <h3>Booking</h3>
                                <p>Pork bresaola meatloaf tongue, landjaeger tail andouille strip steak tenderloin sausage chicken tri-tip et dolore magna aliqua. </p>
                            </div><!-- end process-block -->
                        </li>

                        <li>
                            <div class="process-block">
                                <span><i class="fa fa-dollar"></i></span>
                                <h3>Payment</h3>
                                <p>Pork bresaola meatloaf tongue, landjaeger tail andouille strip steak tenderloin sausage chicken tri-tip et dolore magna aliqua. </p>
                            </div><!-- end process-block -->
                        </li>
                    </ul>
                </div><!-- end columns -->
           </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <div id="why-us" class="innerpage-section-padding">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="page-heading innerpage-heading">
                      <h2>Why Choose Us</h2>
                      <hr class="heading-line">
                  </div><!-- end page-heading -->

                  <div class="row">

                      <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" id="why-us-tabs">

                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#tb-happy-client" data-toggle="tab"><span><i class="fa fa-smile-o"></i></span>Happy Clients</a></li>
                              <li><a href="#tb-satisfaction" data-toggle="tab"><span><i class="fa fa-thumbs-o-up"></i></span>Satisfaction</a></li>
                              <li><a href="#tb-daily-tours" data-toggle="tab"><span><i class="fa fa-plane"></i></span>Daily Tours</a></li>
                          </ul><!-- end nav-tabs -->

                          <div class="tab-content">

                              <div id="tb-happy-client" class="tab-pane fade in active">
                                  <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.  Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper.</p>
                                  <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per. Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.</p>
                                  <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>
                              </div><!-- end tb-happy-client -->

                              <div id="tb-satisfaction" class="tab-pane fade">
                                  <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper.</p>
                                  <p> Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si. Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.</p>
                                  <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>
                              </div><!-- end tb-satisfaction -->

                              <div id="tb-daily-tours" class="tab-pane fade">
                                  <p> Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si. Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.</p>
                                  <p>Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper.</p>
                                  <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>
                              </div><!-- end b-daily-tours -->

                          </div><!-- end tab-content -->
                      </div><!-- end columns -->

                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" id="progress-bars">

                          <div class="bar">
                              <h4>Satisfied Clients</h4>
                              <div class="progress">
                                  <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"><span>90%</span></div>
                              </div><!-- end progress -->
                          </div><!-- end bar -->

                          <div class="bar">
                              <h4>Packages</h4>
                              <div class="progress">
                                  <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width:86%"><span>86%</span></div>
                              </div><!-- end progress -->
                          </div><!-- end bar -->

                          <div class="bar">
                              <h4>Accomodation</h4>
                              <div class="progress">
                                  <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"><span>75%</span></div>
                              </div><!-- end progress -->
                          </div><!-- end bar -->

                          <div class="bar">
                              <h4>Price Guarantee</h4>
                              <div class="progress">
                                  <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width:83%"><span>83%</span></div>
                              </div><!-- end progress -->
                          </div><!-- end bar -->

                      </div><!-- end columns -->

                  </div><!-- end row -->
              </div><!-- end columns -->
         </div><!-- end row -->
      </div><!-- end container -->
  </div>

  <div id="login" class="innerpage-section-padding" style="background: #eeeeee;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

            	<div class="flex-content">
                    <div class="custom-form custom-form-fields">
                        <h3>Login</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <form>

                            <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Username" required="">
                                 <span><i class="fa fa-user"></i></span>
                            </div>

                            <div class="form-group">
                                 <input type="password" class="form-control" placeholder="Password" required="">
                                 <span><i class="fa fa-lock"></i></span>
                            </div>

                            <div class="checkbox">
                                 <label><input type="checkbox"> Remember me</label>
                            </div>

                            <button class="btn btn-orange btn-block">Login For Start Adventure</button>
                        </form>

                        <div class="other-links">
                        	<p class="link-line">New Here ? <a href="#">Sign Up</a></p>
                            <a class="simple-link" href="#">Forgot Password ?</a>
                        </div><!-- end other-links -->
                    </div><!-- end custom-form -->

                    <div class="flex-content-img custom-form-img">
                        <img src="images/login.jpg" class="img-responsive" alt="registration-img">
                    </div><!-- end custom-form-img -->
                </div><!-- end form-content -->

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>
@endsection
