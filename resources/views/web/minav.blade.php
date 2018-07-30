  <header id="minav">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="{{ route('dti') }}" class="scrollto">{{ $company->logo }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <h1><a href="#intro"><img src="img/logo.png" alt="" title="" width="200px" height="50px"/></a></h1> --}}
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{ route('dti') }}">Inicio</a></li>
          <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
          <li><a href="{{ route('eventos') }}">Eventos</a></li>
          <li><a href="{{ route('servicios') }}">Servicios</a></li>
          <li><a href="{{ route('portafolios') }}">Portafolio</a></li>
          <li><a href="{{ $company->url }}">Vigilancia Técnologica</a></li>
          <li><a href="{{ route('contactos')}}">Contáctenos</a></li>
          <li class="menu-has-children"><a href=""><span class="ion ion-donwload"></span></a>
            <ul>
              @if (Route::has('login'))
                @auth
                  <li><a href="{{ url('/home') }}">Regresar</a></li>
                @else <ion-icon name="person"></ion-icon>
                  <li><a href="{{ route('register') }}">Registrarse</a></li>
                  <li><a href="{{ route('login') }}">Ingresar</a></li>                  
                @endauth
              @endif
            </ul>
          </li>  
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->