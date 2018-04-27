<div class="slim-mainpanel" style="position: relative;">
    <div class="container">
      <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="slim-pagetitle">@yield('title')</h6>
      </div><!-- slim-pageheader -->

      <div class="row row-sm">

        @yield('content')

      </div><!-- row -->
    </div><!-- container -->
  </div>
