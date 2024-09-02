<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="BPBD - Bandung Barat">
  <meta name="keywords" content="admin, bpbd, bandung barat">
  <meta name="author" content="BPBD - Bandung Barat">
  <meta name="robots" content="noindex, nofollow">
  <title>BPBD - Bandung Barat</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
  <div id="global-loader">
    <div class="whirly-loader"> </div>
  </div>

  <div class="main-wrapper">

    <div class="header">

      <div class="header-left active">
        <a href="#" class="logo logo-normal">
          <img src="{{ asset('assets/img/logo/logo-bpbd.png') }}" alt="">
        </a>
        <a href="#" class="logo logo-white">
          <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
        </a>
        <a href="#" class="logo-small">
          <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
          <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
      </div>

      <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </a>

      <ul class="nav user-menu">

        <li class="nav-item nav-searchinputs">
          <div class="top-nav-search" style="display: none;">
            <a href="javascript:void(0);" class="responsive-search">
              <i class="fa fa-search"></i>
            </a>
            <form action="#" class="dropdown">
              <div class="searchinputs dropdown-toggle" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false">
                <input type="text" placeholder="Search">
                <div class="search-addon">
                  <span><i data-feather="x-circle" class="feather-14"></i></span>
                </div>
              </div>
            </form>
          </div>
        </li>


        <li class="nav-item nav-item-box">
          <a href="javascript:void(0);" id="btnFullscreen">
            <i data-feather="maximize"></i>
          </a>
        </li>
        <li class="nav-item dropdown has-arrow main-drop">
          <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
            <span class="user-info">
              <span class="user-letter">
                <img src="{{ asset('assets/img/avatar/user.png') }}" alt="" class="img-fluid">
              </span>
              <span class="user-detail">
                <span class="user-name">{{ Auth::user()->nama }}</span>
                <span class="user-role">{{ Auth::user()->role }}</span>
              </span>
            </span>
          </a>
          <div class="dropdown-menu menu-drop-user">
            <div class="profilename">
              <div class="profileset">
                <span class="user-img"><img src="{{ asset('assets/img/avatar/user.png') }}" alt="">
                  <span class="status online"></span></span>
                <div class="profilesets">
                  <h6>{{ Auth::user()->nama }}</h6>
                  <h5>{{ Auth::user()->role }}</h5>
                </div>
              </div>
              <hr class="m-0">
              <a class="dropdown-item" href="{{ route('profilsetting', Auth::user()->id_user) }}"> <i class="me-2" data-feather="user"></i>
                Profil Saya</a>
              <hr class="m-0">
              <a class="dropdown-item logout pb-0" href="/logout"><img
                  src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img">Logout</a>
            </div>
          </div>
        </li>
      </ul>
      <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="{{ route('profilsetting', Auth::user()->id_user) }}">My Profile</a>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </div>
    </div>


    @include('templates.layouts.sidebar')

    <div class="page-wrapper">
      <div class="content">
        @yield('content')
      </div>
    </div>

  </div>


  <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>

  <script src="{{ asset('assets/js/feather.min.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>

  <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>

  <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>
  <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>

  <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>
  <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>

  <script src="{{ asset('assets/js/theme-script.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>
  <script src="{{ asset('assets/js/script.js') }}" type="8e19b7abeb795af9dc39399c-text/javascript"></script>
  <script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="8e19b7abeb795af9dc39399c-|49" defer=""></script>
  @stack('js')
</body>

</html>