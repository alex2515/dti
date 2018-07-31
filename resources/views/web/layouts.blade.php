<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ $company->name }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="La Dirección de Transferencia e Innovación (DTI) es un órgano dependiente del Vicerrectorado de Investigación, encargado de promover y gestionar relaciones e interacciones entre la Universidad y su entorno.">
  <meta name="keywords" content="DTI,Oferta Tecnologica,startup,unheval,investigacion,patentes">
  <meta name="author" content="ALexander">

  <!-- Favicons -->
  <link href="{{ asset('img/icon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Icons -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <main id="main">
    @yield('content')
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 footer-info">
            <a href="#intro"><img src="img/logo.png" alt="" title=""/></a>
            <h3><small><strong>{{ $company->name }}</strong></small></h3>
            {{-- <p>La Dirección de Transferencia e Innovación (DTI) es un órgano dependiente del Vicerrectorado de Investigación, encargado de promover y gestionar relaciones e interacciones entre la Universidad y su entorno.</p> --}}
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('dti') }}">Inicio</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('nosotros') }}">Nosotros</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('eventos') }}">Eventos</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('servicios') }}">Servicios</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('portafolios') }}">Portafolio</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-3 footer-contact">
            <h4>Contáctenos</h4>
            {{ $company->address }} <br>
              <strong>Teléfono: </strong>{{ $company->phone }}<br>
              <strong>Email: </strong>{{ $company->email }}<br>
            </p>

            <div class="social-links">
              <a href="{{ $company->twitter }}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="{{ $company->facebook }}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="{{ $company->instagram }}" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="{{ $company->gmail }}" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Nuestro boletín</h4>
            
            <div class="social-links pull-right">
              Intranet <a href="{{ $company->urlintranet }}" target="_blank"><i class="fa fa-user-circle"></i></a>
            </div>
            <br>
            <hr>
            <hr>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <small>© Copyrights - Vicerectorado de investigación, 2018 Aviso legal - Política de cookies - Accesibilidad - Ayuda - Contacto

Felipe IV, 4 - 28014 Madrid - Teléfono: (34) 91 420 14 78

        &copy; Copyright <strong></strong>. Todos los derechos reservados. <br>
        Web Editor <a href="https://bootstrapmade.com/"><em><strong> - Espinoza Gonzales, ALexander R.</strong></em></a></small>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
        Web Editor <a href="https://bootstrapmade.com/"><em><strong>Espinoza Gonzales, ALexander R.</strong></em></a> --}}
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
  @yield('scripts')
</body>
</html>

