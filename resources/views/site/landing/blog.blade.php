@extends('layouts.app')

@section('title')
  Blog
@endsection

@section('menu-' . $menu_active)
  active
@endsection

@section('content')
  <!--================= PAGE-COVER ================-->
  <section class="page-cover" id="cover-blog-listing">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h1 class="page-title">Blog</h1>
                  <ul class="breadcrumb">
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li class="active">Blog</li>
                  </ul>
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end container -->
  </section><!-- end page-cover -->


  <!--==== INNERPAGE-WRAPPER =====-->
  <section class="innerpage-wrapper">

    <div id="blog-listings" class="innerpage-section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
              <div class="space-right">

                    @foreach ($data['all_blog'] as $blog)
                      <div class="main-block blog-post blog-list">
                          <div class="main-img blog-post-img">
                            <a href="blog-detail-right-sidebar.html">
                                <img src="{{ asset('upload/img/posts/' . $blog->poster) }}" class="img-responsive" alt="blog-post-image" style="object-fit: cover;"/>
                              </a>
                              <div class="main-mask blog-post-info">
                                  <ul class="list-inline list-unstyled blog-post-info">
                                      <li><span><i class="fa fa-calendar"></i></span>{{ $blog->created_at }}</li>
                                      <li><span><i class="fa fa-user"></i></span>By: <a href="#">{{ $blog->user->username }}</a></li>
                                  </ul>
                              </div>
                          </div><!-- end blog-post-img -->

                          <div class="blog-post-detail">
                              <h2 class="blog-post-title"><a href="blog-detail-right-sidebar.html">{{ $blog->title }}</a></h2>
                              <p>
                                {{ $blog->description }}
                              </p>
                              <a href="{{ route('blog_detail', ['id' => $blog->id]) }}" class="btn btn-orange">View More</a>
                          </div><!-- end blog-post-detail -->
                      </div><!-- end blog-post -->
                    @endforeach

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

                </div><!-- end space-right -->
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">
                <div class="row">

                  <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="side-bar-block recent-post">
                            <h2 class="side-bar-heading">Recent Post</h2>

                            <div class="recent-block">
                                <div class="recent-img">
                                    <a href="blog-detail-right-sidebar.html"><img src="images/recent-post-1.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                </div><!-- end recent-img -->

                                <div class="recent-text">
                                    <a href="blog-detail-right-sidebar.html"><h5>Host a Family  Party</h5></a>
                                    <span class="date">27 May, 2017</span>
                                </div><!-- end recent-text -->
                            </div><!-- end recent-block -->

                            <div class="recent-block">
                                <div class="recent-img">
                                    <a href="blog-detail-right-sidebar.html"><img src="images/recent-post-2.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                </div><!-- end recent-img -->

                                <div class="recent-text">
                                    <a href="blog-detail-right-sidebar.html"><h5>Host a Family  Party</h5></a>
                                    <span class="date">27 May, 2017</span>
                                </div><!-- end recent-text -->
                            </div><!-- end recent-block -->

                            <div class="recent-block">
                                <div class="recent-img">
                                    <a href="blog-detail-right-sidebar.html"><img src="images/recent-post-3.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                </div><!-- end recent-img -->

                                <div class="recent-text">
                                    <a href="blog-detail-right-sidebar.html"><h5>Host a Family  Party</h5></a>
                                    <span class="date">27 May, 2017</span>
                                </div><!-- end recent-text -->
                            </div><!-- end recent-block -->

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
  </div><!-- end blog-listings -->
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
