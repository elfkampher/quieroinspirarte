<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>@yield('meta-title', config('app.name'). "| Blog")</title>
	<meta name="description" content="@yield('meta-description', 'Este es el blog de Quiero inspirarte, conviertete en ti')">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	
	<link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="{{ asset('assets/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
	@stack('styles')
</head>
<body class="profile-page sidebar-collapse">
	<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
	    <div class="container">
	      <div class="navbar-translate">
	        <a class="navbar-brand" href="/">
	          Blog Quiero Inspirarte </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="navbar-toggler-icon"></span>
	          <span class="navbar-toggler-icon"></span>
	          <span class="navbar-toggler-icon"></span>
	        </button>
	      </div>

	      @include('partials.nav')
	      
	    </div>
	  </nav>
	  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-6">
	          <h1 class="title">Quiero Inspirarte.</h1>
	          <h4>Conviertete en ti.</h4>
	          <br>	          
	        </div>
	      </div>
	    </div>
	  </div>
	<!-- Contenido -->
	@yield('content')
	<!-- Contenido -->
	<section class="footer">
		<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="/contacto">
              Contacto
            </a>
          </li>
          <li>
            <a href="/acerca-de">
              About Us
            </a>
          </li>
          <li>
            <a href="/">
              Blog
            </a>
          </li>
          <li>
            <a href="/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, Hecho con <i class="material-icons">favorite</i> Por
        <a href="https://www.encodyne.com.mx/" target="_blank">Encodyne</a> cybertechnology.
      </div>
    </div>
  </footer>
	</section>
	@stack('scripts')
	<script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
	<!--  Google Maps Plugin    -->
	<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
	<script src="{{ asset('assets/js/material-kit.js?v=2.0.7') }}" type="text/javascript"></script>
</body>
</html>