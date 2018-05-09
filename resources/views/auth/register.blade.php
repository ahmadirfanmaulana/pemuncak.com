
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/slim/template/page-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 00:18:29 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Pemuncak.com - Register</title>

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<!-- Flaticon Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fonts/font/flaticon.css') }}">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/slim.css') }}">

    <style media="screen">
      body{
        background: url('{{ asset('images/destination-2.jpg') }}');
        background-size: cover;
        background-attachment: fixed;
      }
      .flaticon-people:before{
        font-size: 40px;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>

    <div class="signin-wrapper" style="background:rgba(0,0,0,0.6)">

      <div class="signin-box signup">
        <h2 class="slim-logo"><a href="{{ url('') }}"><i class="flaticon-people"></i> PEMUNCAK<span style="color:#444;">.COM</span></a></h2>
        <h3 class="signin-title-primary">Get Started!</h3>
        <h5 class="signin-title-secondary lh-4">It's free to signup and only takes a minute.</h5>

        <form class="" action="{{ route('register') }}" method="post">
          {{ csrf_field() }}
          <div class="signup-separator"><span>Identify</span></div>

          <div class="row row-xs mg-b-10">
            <div class="col-sm">
              <input type="text" class="form-control" placeholder="Firstname" name="first_name" value="{{ old('first_name') }}" required>
            </div>
            <div class="col-sm mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" placeholder="Lastname" name="last_name" value="{{ old('last_name') }}">
            </div>
          </div><!-- row -->

          <div class="row row-xs mg-b-10">
            <div class="col-sm">
              <input type="text" class="form-control" placeholder="Born In" name="born_at" value="{{ old('born_at') }}" required>
            </div>
            <div class="col-sm mg-t-10 mg-sm-t-0">
              <input type="text" id="date-mask" class="form-control" placeholder="Born Date" name="born_date" {{ old('born_date') }} required>
            </div>
          </div><!-- row -->

          <div class="row row-xs mg-b-10">

            <div class="col-sm">
              @php
                if (old('gender') == "M") {
                  $genderM = 'checked';
                  $genderF = '';
                }
                elseif (old('gender') == "F") {
                  $genderM = '';
                  $genderF = 'checked';
                }
                else {
                  $genderM = 'checked';
                  $genderF = '';
                }
              @endphp

              <label class="rdiobox">
                <input name="gender" type="radio" value="M" {{ $genderM }} required>
                <span> <i class="fa fa-male"></i> Male</span>
              </label>
              <label class="rdiobox">
                <input name="gender" type="radio" value="F" {{ $genderF }} required>
                <span> <i class="fa fa-female"></i> Female</span>
              </label>
            </div>
            <div class="col-sm mg-t-10 mg-sm-t-0">
              <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
          </div><!-- row -->

          <div class="signup-separator"><span>Account</span></div>
          <div class="row row-xs mg-b-10">
            <div class="col-md">
              <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required>
            </div>
          </div><!-- row -->
          @if ($errors->has('username'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif

          <div class="row row-xs mg-b-10">
            <div class="col-sm">
              <input type="password" class="form-control" placeholder="Password" name="password" value="" required>
            </div>
            <div class="col-sm mg-t-10 mg-sm-t-0">
                <input type="password" class="form-control" placeholder="Repeat Password" name="password_confirmation" required>
            </div>
          </div><!-- row -->
          @if ($errors->has('password'))
            <span class="help-block text-danger">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            <br><br>
          @endif

          <button class="btn btn-primary btn-block btn-signin" type="submit" name="submit" value="submit">Sign Up</button>


        </form>


        <div class="signup-separator"><span>Have Account ?</span></div>

        {{-- <button class="btn btn-facebook btn-block">Sign Up Using Facebook</button>
        <button class="btn btn-twitter btn-block">Sign Up Using Twitter</button> --}}

        <p class="mg-t-40 mg-b-0">Already have an account? <a href="{{ url('login') }}">Sign In</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="{{ asset('admin/lib/jquery/js/jquery.js') }} "></script>
    <script src="{{ asset('admin/lib/popper.js/js/popper.js') }} "></script>
    <script src="{{ asset('admin/lib/bootstrap/js/bootstrap.js') }} "></script>
    <script src="{{ asset('admin/lib/jquery.maskedinput/js/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('admin/js/slim.js') }} "></script>

    <script type="text/javascript">
      $('#date-mask').mask('99/99/9999');
      $('#phone-mask').mask('9999-9999-9999');
    </script>
  </body>

<!-- Mirrored from themepixels.me/slim/template/page-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 00:18:29 GMT -->
</html>
