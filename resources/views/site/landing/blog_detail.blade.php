@extends('layouts.app')

@section('title')
  Blog - {{ $data['data_blog']->title }}
@endsection

@section('menu-' . $menu_active)
  active
@endsection

@section('content')
  <!--================= PAGE-COVER ================-->
  <section class="page-cover" id="cover-blog-details">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h1 class="page-title text-capitalize">{{ $data['data_blog']->title }}</h1>
                  <ul class="breadcrumb">
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li><a href="{{ route('blog') }}">Blog</a></li>
                      <li class="active text-capitalize">{{ $data['data_blog']->title }}</li>
                  </ul>
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section><!-- end page-cover -->


  <!--==== INNERPAGE-WRAPPER =====-->
  <section class="innerpage-wrapper">
    <div id="blog-details" class="innerpage-section-padding">
      <div class="container">
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <div class="space-right">

                          <div class="blog-post">
                              <div class="main-img blog-post-img">
                                  <img src="{{ asset('upload/img/posts/' . $data['data_blog']->poster) }}" class="img-responsive" alt="blog-post-image" style="object-fit: cover;" />
                                  <div class="main-mask blog-post-info">
                                      <ul class="list-inline list-unstyled blog-post-info">
                                          <li><span><i class="fa fa-calendar"></i></span>{{ $data['data_blog']->created_at }}</li>
                                          <li><span><i class="fa fa-user"></i></span>By: <a href="#">{{ $data['data_blog']->user->username }}</a></li>
                                      </ul>
                                  </div>
                              </div><!-- end blog-post-img -->

                              <div class="blog-post-detail">
                                  <h2 class="blog-post-title">{{ $data['data_blog']->title }}</h2>
                                  {{ $data['data_blog']->description }}
                              </div><!-- end blog-post-detail -->
                          </div><!-- end blog-post -->

                          <div id="comments">

                            <div class="comment-block">
                              <div class="user-img">
                                    <img src="images/commenter-1.jpg" class="img-responsive" alt="user-img" />
                                  </div><!-- end user-img -->

                                  <div class="user-text">
                                    <ul class="list-inline list-unstyled">
                                        <li class="user-name">Jhon Smith</li>
                                          <li class="date">27 May, 2017</li>
                                      </ul>
                                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                                      <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                  </div><!-- end user-text -->

                                  <div class="comment-block reply-block">
                                      <div class="user-img">
                                          <img src="images/commenter-2.jpg" class="img-responsive" alt="user-img" />
                                      </div><!-- end user-img -->

                                      <div class="user-text">
                                          <ul class="list-inline list-unstyled">
                                              <li class="user-name">Jhon Smith</li>
                                              <li class="date">27 May, 2017</li>
                                          </ul>
                                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                                          <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                      </div><!-- end user-text -->
                                  </div><!-- end reply-block -->
                            </div><!-- end comment-block -->

                              <div class="comment-block">
                              <div class="user-img">
                                    <img src="images/commenter-3.jpg" class="img-responsive" alt="user-img" />
                                  </div><!-- end user-img -->

                                  <div class="user-text">
                                    <ul class="list-inline list-unstyled">
                                        <li class="user-name">Jhon Smith</li>
                                          <li class="date">27 May, 2017</li>
                                      </ul>
                                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                                      <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                  </div><!-- end user-text -->
                            </div><!-- end comment-block -->

                              <div class="comment-block">
                              <div class="user-img">
                                    <img src="images/commenter-4.jpg" class="img-responsive" alt="user-img" />
                                  </div><!-- end user-img -->

                                  <div class="user-text">
                                    <ul class="list-inline list-unstyled">
                                        <li class="user-name">Jhon Smith</li>
                                          <li class="date">27 May, 2017</li>
                                      </ul>
                                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                                      <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                  </div><!-- end user-text -->
                            </div><!-- end comment-block -->

                          </div><!-- end comments -->

                          <div id="comment-form">
                            <div class="innerpage-heading">
                                <h1>Add Comment</h1>
                              </div><!-- end innerpage-heading -->

                              <form>
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-6 col-md-6">
                                          <div class="form-group">
                                              <input type="text" class="form-control input input-lg" placeholder="Your Name"  required/>
                                          </div>
                                      </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-6 col-md-6">
                                          <div class="form-group">
                                              <input type="email" class="form-control input input-lg" placeholder="Your Email"  required/>
                                          </div>
                                      </div><!-- end columns -->
                                  </div><!-- end row -->

                                  <div class="form-group">
                                      <textarea class="form-control input-lg" rows="5" placeholder="Your Message"></textarea>
                                  </div>

                                  <button class="btn btn-orange">Submit</button>
                              </form>
                          </div><!-- end comment-form -->

                      </div><!-- end space-right -->
                  </div><!-- end columns -->

                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">


                      <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-12">
                              <div class="side-bar-block recent-post">
                                  <h2 class="side-bar-heading">Recent Post</h2>

                                  @foreach ($data['recent_blog'] as $recent)
                                    <div class="recent-block">
                                      <div class="recent-img">
                                        <a href="{{ route('blog_detail', ['id' => $recent->id]) }}">
                                          <img src="{{ asset('upload/img/posts/' . $recent->poster) }}" class="img-reponsive" alt="recent-blog-image" style="width: 80px;" />
                                        </a>
                                      </div><!-- end recent-img -->

                                      <div class="recent-text">
                                        <a href="{{ route('blog_detail', ['id' => $recent->id]) }}"><h5>{{ $recent->title }}</h5></a>
                                        <span class="date">{{ $recent->created_at }}</span>
                                      </div><!-- end recent-text -->
                                    </div><!-- end recent-block -->
                                  @endforeach

                              </div><!-- end side-bar-block -->
                          </div><!-- end columns -->
        </div><!-- end row -->

        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-12">
                              <div class="side-bar-block tags">
                                  <h2 class="side-bar-heading">Tags</h2>
                                  <ul class="list-unstyled list-inline">
                                      <li><a href="#" class="btn btn-g-border">SPA</a></li>
                                      <li><a href="#" class="btn btn-g-border">Restaurant</a></li>
                                      <li><a href="#" class="btn btn-g-border">Searvices</a></li>
                                      <li><a href="#" class="btn btn-g-border">Wifi</a></li>
                                      <li><a href="#" class="btn btn-g-border">Tv</a></li>
                                      <li><a href="#" class="btn btn-g-border">Rooms</a></li>
                                      <li><a href="#" class="btn btn-g-border">Pools</a></li>
                                      <li><a href="#" class="btn btn-g-border">Work</a></li>
                                      <li><a href="#" class="btn btn-g-border">Sports</a></li>
                                  </ul>
                              </div><!-- end side-bar-block -->
          </div><!-- end columns -->

                      </div><!-- end row -->
                  </div><!-- end columns -->

              </div><!-- end row -->
      </div><!-- end container -->
    </div><!-- end blog-postings -->
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
@endsection
