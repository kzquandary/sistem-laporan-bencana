<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="POS - Bootstrap Admin Template">
  <meta name="keywords"
    content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
  <meta name="author" content="Dreamguys - Bootstrap Admin Template">
  <meta name="robots" content="noindex, nofollow">
  <title>Login - BPBD Bandung Barat</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="account-page">
  <div id="global-loader">
    <div class="whirly-loader"> </div>
  </div>

  <div class="main-wrapper">
    <div class="account-content">
      <div class="login-wrapper">
        <div class="login-content">
          <form action="/postlogin" method="POST">
            <div class="login-userset" style="width: 460px;">
              <div class="login-logo logo-normal">
                <img src="{{ asset('assets/img/logo/logo-bpbd.png') }}" alt="img">
              </div>
              <a href="index.html" class="login-logo logo-white">
                <img src="{{ asset('assets/img/logo/logo-bpbd.png') }}" alt="">
              </a>
              <div class="login-userheading" style="display: flex; flex-direction: column; align-items: center;">
                <h3>Login</h3>
              </div>
              @csrf
              @error('login_gagal')
              <div class="alert alert-solid-danger alert-dismissible fade show">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                  aria-label="Close"><i class="fas fa-xmark"></i></button>
              </div>
              @enderror
              <div class="form-login">
                <label>Email Address</label>
                <div class="form-addons">
                  <input type="text" name="email" class="form-control" placeholder="Masukkan email">
                  <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="img">
                </div>
              </div>
              <div class="form-login">
                <label>Password</label>
                <div class="pass-group">
                  <input type="password" name="password" class="pass-input" placeholder="Masukkan password">
                  <span class="fas toggle-password fa-eye-slash"></span>
                </div>
              </div>
              <div class="form-login authentication-check">
                <div class="row">
                  <div class="col-6">
                    <div class="custom-control custom-checkbox">
                      <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                        <input type="checkbox">
                        <span class="checkmarks"></span>Ingat saya
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-login">
                <button type="submit" class="btn btn-login">Login</button>
              </div>
              <div class="signinform">
                <h4>Belum punya akun?<a href="/register" class="hover-a"> Buat akun</a>
                </h4>
              </div>
              <div class="form-setlogin or-text">
              </div>
              <div class="form-sociallink">
                <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                  <p>Copyright &copy; 2024 BPBD Bandung Barat. All rights reserved</p>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="login-img">
          <img src="{{ asset('assets/img/authentication/login02.png') }}" alt="img">
        </div>
      </div>
    </div>
  </div>

  <div class="customizer-links" id="setdata">
    <ul class="sticky-sidebar">
      <li class="sidebar-icons">
        <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
          data-bs-original-title="Theme">
          <i data-feather="settings" class="feather-five"></i>
        </a>
      </li>
    </ul>
  </div>

  <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="85895a85238318871910afc5-text/javascript"></script>

  <script src="{{ asset('assets/js/feather.min.js') }}" type="85895a85238318871910afc5-text/javascript"></script>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="85895a85238318871910afc5-text/javascript"></script>

  <script src="{{ asset('assets/js/theme-script.js') }}" type="85895a85238318871910afc5-text/javascript"></script>
  <script src="{{ asset('assets/js/script.js') }}" type="85895a85238318871910afc5-text/javascript"></script>
  <script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="85895a85238318871910afc5-|49" defer=""></script>
</body>

</html>