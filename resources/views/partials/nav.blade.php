<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="dropdown nav-item">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
          <i class="material-icons">apps</i> Menú
        </a>
        <div class="dropdown-menu dropdown-with-icons">
          <a href="{{ route('pages.home') }}" class="dropdown-item">
            <i class="material-icons">layers</i> Blog
          </a>
          <a href="{{ route('pages.contact') }}" class="dropdown-item">
            <i class="material-icons">mail</i> Contacto
          </a>
          <a href="{{ route('pages.about') }}" class="dropdown-item">
            <i class="material-icons">info</i> Nosotros
          </a>
          <a href="{{ route('pages.archive') }}" class="dropdown-item">
            <i class="material-icons">description</i> Archivo
          </a>
          <a href="/login" class="dropdown-item">
            <i class="material-icons">dashboard</i> Administración
          </a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
          <i class="fa fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/stocksillustrated/" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
          <i class="fa fa-facebook-square"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/stocksillustrated_ef" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
          <i class="fa fa-instagram"></i>
        </a>
      </li>
      @if(session()->has('qwick'))
      <li class="dropdown nav-item">
        <a href="javascript:;" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
          <div class="profile-photo-small">
            <img src="./assets/img/faces/juan_carlos.jpg" alt="Circle Image" class="rounded-circle img-fluid">
          </div>
        </a>
        
         <div class="dropdown-menu dropdown-menu-right">
          <h6 class="dropdown-header">Usuario</h6>
          <p class="dropdown-item">{{ Auth::user()->name }} <br><br> {{ Auth::user()->email }}</p>
          
          <a href="{{ route('logout') }}" 
            class="dropdown-item" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Sign out
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>        
      </li>
      @endif
    </ul>
  </div>