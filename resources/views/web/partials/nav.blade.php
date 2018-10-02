    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <a href="#intro"><img src="{{ $company->file }}" alt="" title="" width="300px" height="38px"/></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="{{ route('dti') }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                <li><a href="{{ route('eventos') }}">Eventos</a></li>
                <li><a href="{{ route('servicios') }}">Servicios</a></li>
                <li><a href="{{ route('portafolios') }}">Portafolio</a></li>
                <li><a href="{{ $company->url }}" target="_blank">Vigilancia Técnologica</a></li>
                <li><a href="{{ route('contactos')}}">Contáctenos</a></li>
                <li class="menu-has-children"><a href=""><span class="ion ion-donwload"></span></a>
                    <ul>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/home') }}">Regresar</a></li>
                            @else 
                                
                                <li><a href="{{ route('register') }}"><i class="ion-person-add"></i> Registrarse</a></li>
                                <li><a href="{{ route('login') }}"><i class="ion-ios-contact-outline"></i> Ingresar</a></li>                  
                            @endauth
                        @endif
                    </ul>
                </li>  
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>