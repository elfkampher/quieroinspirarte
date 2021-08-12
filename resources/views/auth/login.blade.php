
<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{ config('app.name', 'login')}}
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">
          Quiero Inspirarte </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">          
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/HealthymindHealthierheart/" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/quiero_inspirarte_solvg" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Administración</h4> 
                <p></p>               
              </div>              
              <div class="card-body">                
                <div class="input-group">
                  <div class="input-group-prepend">
                    
                  </div>                  
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email..." value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password..." name="password" required>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg">Acceder</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>            
            <li>
              <a href="/acerca-de">
                Acerca De
              </a>
            </li>
            <li>
              <a href="/">
                Blog
              </a>
            </li>
            <li>
              <a href="/contacto">
                Contacto
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, Hecho con <i class="material-icons">favorite</i> por
          <a href="https://www.encodyne.com/" target="_blank">Encodyne</a> cybertechnology.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/material-kit.js?v=2.0.7') }}" type="text/javascript"></script>
</body>

</html>


