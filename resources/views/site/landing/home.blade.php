@extends('layouts.app')

@section('title')
  Home
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
                                      <input type="text" class="form-control" placeholder="USERNAME" style="text-transform: none;" name="username">
                                      <i class="fa fa-user-circle"></i>
                                  </div>

                                  @if ($errors->has('username'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('username') }}</strong>
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
@endsection
