<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/slim/template/page-signin2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 00:18:29 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pemuncak.com - Login</title>

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <!-- Flaticon Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fonts/font/flaticon.css') }}">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/slim.css') }}">

    <style media="screen">
      body{
        background: url('{{ asset('images/destination-3.jpg') }}');
        background-size: cover;
      }
      .flaticon-people:before{
        font-size: 40px;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>

    <form class="" action="" method="post">
      {{ csrf_field() }}

      <div class="d-md-flex flex-row-reverse">
        <div class="signin-right">

          <div class="signin-box">
            <h2 class="signin-title-primary">SIGN IN</h2>
            <h3 class="signin-title-secondary">Sign in to continue.</h3>

            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter your Username" name="username" value="{{ old('username') }}">

              </div>
              @if ($errors->has('username'))
                  <span class="help-block">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              @endif
            </div><!-- form-group -->
            <div class="form-group mg-b-50">
              <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div><!-- form-group -->
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <button class="btn btn-primary btn-block btn-signin" type="submit" value="submit" name="submit">Sign In</button>
            <p class="mg-b-0">New in here ? <a href="{{ url('register') }}">Sign Up</a></p>
          </div>

        </div><!-- signin-right -->
        <div class="signin-left" style="background:rgba(0,0,0,0.6)">
          <div class="signin-box">
            <h2 class="slim-logo"><a href="{{ url('') }}"><i class="flaticon-people"></i> PEMUNCAK<span style="color: #fff;">.COM</span></a></h2>

            <p>climbing the mountain was more fun with <a href="#">PEMUNCAK.COM</a> </p>

            <p class="tx-12">&copy; Copyright 2018. Ahmad Irfan Maulana.</p>
          </div>
        </div><!-- signin-left -->
      </div><!-- d-flex -->
    </form>

    <script src="{{ asset('admin/lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/js/slim.js') }}"></script>

  </body>

<!-- Mirrored from themepixels.me/slim/template/page-signin2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 00:18:29 GMT -->
</html>
