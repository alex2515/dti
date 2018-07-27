<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ $company->name }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/icon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}"> --}}
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>


<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        {{-- <h1><a href="{{ route('dti') }}" class="scrollto">{{ $company->logo }}</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1><a href="#intro"><img src="img/logo.png" alt="" title="" width="350px" height="55px"/></a></h1>
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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated zoomIn">Dirección de Transferencia e Innovación</h2>
                {{-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p> --}}
                <a href="#featured-services" class="btn-get-started scrollto">Iniciar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated zoomIn">Patentes, Propiedad Intelectual y Publicaciones</h2>
                <p>La Unidad de Patentes, Propiedad Intelectual y Publicaciones, es la encargada de brindar servicios de asesoría integral con miras a la protección, promoción y difusión de las creaciones intelectuales desarrollados por los miembros de la comunidad universitaria.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Iniciar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated zoomIn">Oferta Tecnológica</h2>
                <p>La Unidad de Oferta Tecnológica es la encargada de identificar, organizar y transferir conocimiento producido como resultado de las investigaciones e innovación tecnológica a empresas y la sociedad. Brinda asesoramiento al sector público y privado en temas de su competencia.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Iniciar</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated zoomIn">Emprendimiento e Incubadora de Empresas</h2>
                <p>La Unidad de Emprendimiento e Incubadora de Empresas, promueve la iniciativa de los estudiantes para la creación de pequeñas y micro empresas de propiedad de los estudiantes, brindando asesoría o facilidades en el uso de los equipos e instalaciones de la institución.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Iniciar</a>
              </div>
            </div>
          </div>

          @foreach($presentations as $presentation)
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ $presentation->file }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated zoomIn">{{ $presentation->title }}</h2>
                <p>{{ $presentation->description }}</p>
                {{-- <a href="#featured-services" class="btn-get-started scrollto">Iniciar</a> --}}
              </div>
            </div>
          </div>
          @endforeach

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="{{ route('eventos') }}">Eventos</a></h4>
            <p class="description">&nbsp</p>
          </div>
          <div class="col-lg-4 col-sm-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="{{ route('servicios') }}">Servicios</a></h4>
            <p class="description">&nbsp</p>
          </div>
          <div class="col-lg-4 col-sm-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="{{ route('portafolios') }}">Portafolio</a></h4>
            <p class="description">&nbsp</p>
          </div>
        </div>
      </div>
    </section>
    <!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Nosotros</h3>
          <p>{{ $company->description }}</p>
        </header>

        <div class="row about-cols">
          @foreach($unities as $unity)
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{ $unity->file }}" alt="" class="img-fluid">
                <div class="icon"><i class="{{ $unity->icon }}"></i></div>
              </div>
              <h2 class="title"><a href="#">{{ $unity->name }}</a></h2>
              <p>
                {{ $unity->description }}
              </p>
              <br>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Events Section
    ============================-->
    <section id="events">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>Eventos</h3>
        </header>
        @foreach($posts as $post)
        <div class="row">
          <div class="col-md-12">
            <p class="text-muted pull-right">
              <em>
                <small>Publicado: {{ $post->created_at->formatLocalized('%A %d %B %Y') }}</small>
              </em>
            </p>
          </div>
          <div class="col-md-4">
            <img src="{{ $post->file }}" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-8">
            <h4><strong>{{ $post->name }}</strong></h4>
            <p>{{ $post->excerpt }}<br>
              <strong>Fecha: </strong>{{ $post->date }}<br>
              <strong>Hora: </strong>{{ $post->time }}<br>
              <strong>Lugar: </strong>{{ $post->place }}
              <a href="{{ route('evento',$post->slug) }}" class="btn btn-success pull-right">Ver mas</a>
            </p>
          </div>
        </div><hr>
        @endforeach
      </div>
    </section><!-- #Events -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>Servicios</h3>
          <p>A continuación los Grupos de Investigación de la UNHEVAL presentan su Oferta Tecnológica y de Servicios, por sector de actividad:</p>
        </header>
        <div class="row">
          @foreach($servicios as $service)
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" >
            <div class="icon"><i class="fa {{ $service->icon }}"></i></div>
            <h4 class="title"><a href="{{ route('servicio', $service->slug) }}">{{ $service->name }}</a></h4>
            <p class="description">{{ substr($service->body, 0,150) }}...</p>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <header class="section-header">
          <h3>Nuestros Clientes</h3>
        </header>
        <div class="owl-carousel clients-carousel">
          @foreach($customers as $customer)
          <img src="{{ $customer->file }}">
          @endforeach
{{--           <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt=""> --}}
        </div>
      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>TESTIMONIOS</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          @foreach($testimonies as $testimony)
          <div class="testimonial-item">
            <img src="{{ $testimony->file }}" class="testimonial-img" alt="">
            <h3>{{ $testimony->name }}</h3>
            <h4>{{ $testimony->profession }}</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              {{ $testimony->description }}
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          @endforeach

{{--           <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div> --}}

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipo</h3>
        </div>
        <div class="row">
          @foreach($teams as $team)
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{ $team->file }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $team->name }}</h4>
                  <span>{{ $team->occupation }}</span>
                  <div class="social">
                    <a href="{{ $team->twitter }}"><i class="fa fa-twitter"></i></a>
                    <a href="{{ $team->facebook }}"><i class="fa fa-facebook"></i></a>
                    <a href="{{ $team->gmail }}"><i class="fa fa-google-plus"></i></a>
                    <a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h3>Contáctenos</h3>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address>{{ $company->address }}</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Teléfono</h3>
              <p><a href="#">{{ $company->phone }}</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="#">{{ $company->email }}</a></p>
            </div>
          </div>
        </div>

        {{-- <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div> --}}
        {{-- class="contactForm" --}}


        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form  method="post" action="{{ route('messages')}}" role="form" >
            {{ csrf_field()}}
            <div class="form-row">
              <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.820797393997!2d-76.25186765077433!3d-9.948863402036856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c2c04dba6beb%3A0x35f1bb14f5be9e6c!2sUniversidad+Nacional+Hermilio+Valdiz%C3%A1n!5e0!3m2!1ses!2spe!4v1530308588056" width="100%" height="430px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select name="emailbusiness" id="emailbusiness" class="form-control">
                    @foreach($unities as $unity)
                    <option value="{{ $unity->email }}">{{ $unity->name }}</option>
                    @endforeach
                    {{-- <option value="ManuelCorreo">Unidad de Emprendimiento e Incubadora de Empresas</option>
                    <option value="AbrahamCorreo">Unidad de Propiedad Intelectual, Patentes y Publicaciones</option> --}}
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Escribe tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu correo" data-rule="email" data-msg="Por favor ingrese un correo valido" />
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Escribe tu celular" data-rule="phone" data-msg="Por favor ingrese un numero de celular valido"/>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Escribe tu asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres de su asunto" />
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="body" rows="5" data-rule="required" data-msg="Por favor escribamos sus necesidaes" placeholder="Escribe tu mensaje" id="body"></textarea>
                  {{-- <div class="validation"></div> --}}
                </div>
                <div class="text-center"><button type="submit">Enviar Mensaje</button>
                </div>    
              </div>
            </div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <h3><small><strong>{{ $company->name }}</strong></small></h3>
            {{-- <p>La Dirección de Transferencia e Innovación (DTI) es un órgano dependiente del Vicerrectorado de Investigación, encargado de promover y gestionar relaciones e interacciones entre la Universidad y su entorno.</p> --}}
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('dti') }}">Inicio</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('nosotros') }}">Nosotros</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('eventos') }}">Eventos</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('servicios') }}">Servicios</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('portafolios') }}">Portafolio</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contáctenos</h4>
            {{ $company->address }} <br>
              <strong>Phone: </strong>{{ $company->phone }}<br>
              <strong>Email: </strong>{{ $company->email }}<br>
            </p>

            <div class="social-links">
              <a href="{{ $company->twitter }}" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="{{ $company->facebook }}" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="{{ $company->instagram }}" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="{{ $company->gmail }}" class="google-plus"><i class="fa fa-google-plus"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Nuestro boletín</h4>
            <p>&nbsp</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. Todos los derechos reservados.
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
        Web Editor <a href="https://bootstrapmade.com/"><em><strong>Espinoza Gonzales, ALexander R.</strong></em></a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{ asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/contact.js') }}"></script>
  <script>
    let seleccionar  = document.getElementById('emailbusiness');
    seleccionar.addEventListener("change", () => {
      let idx = seleccionar.selectedIndex;
      let texto = seleccionar.options[idx].text;
      
      if (texto == "Oferta Tecnológica") {
        document.getElementById("body").placeholder = "Cuales son tus necesidaes"
      }
      if (texto == "Patentes, Propiedad Intelectual y Publicaciones") {
        document.getElementById("body").placeholder = "{{ $company->name }}"
      }
      if (texto == "Emprendimiento e Incubadora de Empresas") {
        document.getElementById("body").placeholder = "Caul es tu duda respecto a emprendimiento"
      }
      
    });
  </script>

</body>
</html>

