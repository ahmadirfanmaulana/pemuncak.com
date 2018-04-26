<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/slim/template/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 00:14:54 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Pemuncak.com | Dashboad - @yield('title')</title>

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Flaticon Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fonts/font/flaticon.css') }}">

    <link href="{{ asset('css/fonts/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/slim.css') }}">

    <style media="screen">
      .icon-header:before{
        font-size: 36px;
        margin-right: 6px;
      }
      .flaticon-xs:before{
        font-size: 0.875rem;
        margin-left: 0px;
      }
    </style>

  </head>
  <body class="slim-sticky-header">
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="{{ url('') }}"><i class="flaticon-people icon-header"></i> PEMUNCAK<span style="color:#444;">.COM</span></a></h2>

          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-a">
            <a href="#" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bolt-outline"></i>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Activity Logs</h6>
                <div>
                  <a href="#">Filter List</a>
                  <a href="#">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-activity-list">
                <div class="activity-label">Today, December 13, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">10:15am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">9:48am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                    <div class="col-8">Login failure</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">7:29am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                    <div class="col-8">(D:) Storage almost full</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">3:21am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-label">Yesterday, December 12, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">6:57am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class="dropdown-list-footer">
                <a href="page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-b">
            <a href="#" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline"></i>
              <span class="indicator"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
                <div>
                  <a href="#">Mark All as Read</a>
                  <a href="#">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-list">
                <!-- loop starts here -->
                <a href="#" class="dropdown-link">
                  <div class="media">
                    <img src="../img/img8.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="dropdown-link">
                  <div class="media">
                    <img src="../img/img9.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="dropdown-link read">
                  <div class="media">
                    <img src="../img/img10.jpg" alt="">
                    <div class="media-body">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="dropdown-link read">
                  <div class="media">
                    <img src="../img/img2.jpg" alt="">
                    <div class="media-body">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-list-footer">
                  <a href="page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="{{ asset('upload/img/users/'. Auth::user()->photo) }}" alt="">
              <span>{{ Auth::user()->first_name }}</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="{{ url('dashboard/profile') }}" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="{{ url('dashboard/edit') }}" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item @if (Session::get('pageActive') == 'dashboard')
            {{ "active" }}
          @endif">
            <a class="nav-link" href="{{ url('dashboard') }}">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
            {{-- <div class="sub-item">
              <ul>
                <li><a href="index-2.html">Dashboard 01</a></li>
                <li><a href="index2.html">Dashboard 02</a></li>
                <li><a href="index3.html">Dashboard 03</a></li>
                <li><a href="index4.html">Dashboard 04</a></li>
                <li><a href="index5.html">Dashboard 05</a></li>
              </ul>
            </div><!-- sub-item --> --}}
          </li>
          <li class="nav-item @if (Session::get('pageActive') == 'adventure')
            {{ "active" }}
          @endif">
            <a class="nav-link" href="{{ url('dashboard/adventure') }}">
              <i class="icon flaticon-hiking"></i>
              <span>Adventure</span>
            </a>
          </li>
          <li class="nav-item @if (Session::get('pageActive') == 'climbing')
            {{ "active" }}
          @endif">
            <a class="nav-link" href="{{ url('dashboard/climbing') }}">
              <i class="icon flaticon-trekking"></i>
              <span>Climbing</span>
            </a>
          </li>
          <li class="nav-item @if (Session::get('pageActive') == 'post')
            {{ "active" }}
          @endif">
            <a class="nav-link" href="{{ url('dashboard/posts') }}">
              <i class="icon ion-paper-airplane"></i>
              <span>Posts</span>
            </a>
          </li>
          <li class="nav-item  @if (Session::get('pageActive') == 'packets')
            {{ "active" }}
          @endif">
            <a class="nav-link" href="{{ url('dashboard/packets') }}">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Packets</span>
            </a>
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->

    <div class="slim-mainpanel" style="position: relative;">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle">@yield('title')</h6>
          </div><!-- slim-pageheader -->

          <div class="row row-xs">
            @yield('content')
          </div><!-- row -->
        </div><!-- container -->
      <div class="resize-sensor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0;top:0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>


    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="#">ThemePixels</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="{{ asset('admin/lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admin/lib/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/lib/jqvmap/js/jquery.vmap.world.js') }}"></script>

    <script src="{{ asset('admin/js/slim.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.vmap.sampledata.js') }}"></script>
    <script>
      $(function(){
        'use strict'

        $('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: '#fff',
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#17A2B8', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });

      });
    </script>
  </body>

<!-- Mirrored from themepixels.me/slim/template/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 00:15:02 GMT -->
</html>
