@extends('web.layouts')
@section('content')
<header id="header">
    @include('web.partials.nav')
</header>
<!-- Fin de nav -->

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
                            <a href="#featured-services" class="btn-get-started scrollto">Iniciar</a>
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
</section>
<!-- Fin de presentacion -->

<section id="featured-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 box">
                <i class="ion-ios-bolt"></i>
                <h4 class="title"><a href="{{ route('eventos') }}">Eventos</a></h4>
                <p class="description">&nbsp</p>
            </div>
        <div class="col-lg-4 col-sm-4 box box-bg">
            <i class="ion-ios-pulse"></i>
            <h4 class="title"><a href="{{ route('servicios') }}">Servicios</a></h4>
            <p class="description">&nbsp</p>
        </div>
        <div class="col-lg-4 col-sm-4 box">
            <i class="ion-ios-paper-outline"></i>
            <h4 class="title"><a href="{{ route('portafolios') }}">Portafolio</a></h4>
            <p class="description">&nbsp</p>
        </div>
        </div>
    </div>
</section>
<!-- Fin de # botones -->

<header id="minav">
    @include('web.partials.nav')
</header>
<!-- Fin nav personalizado -->

@include('web.partials.about')
<!-- Fin de Seccion Nosotros -->

<section id="events">
    <div class="container">
        <header class="section-header wow fadeInUp">
            <h3>Eventos</h3>
        </header>
        @include('web.partials.eventos')
    </div>
</section>
<!-- Fin de Seccion Eventos -->

@include('web.partials.servicios')
<!-- Fin de Seccion Servicios -->

<section id="clients" class="wow fadeInUp">
    <div class="container">
        <header class="section-header">
            <h3>Nuestros Clientes</h3>
        </header>
        <div class="owl-carousel clients-carousel">
            @foreach($customers as $customer)
                <img src="{{ $customer->file }}">
            @endforeach
        </div>
    </div>
</section>
<!-- Fin de clientes -->

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
        </div>
    </div>
</section>
<!-- Fin de testimonios -->

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
</section>
<!-- Fin de equipo -->

@include('web.partials.contacto')
<!-- Fin de seccion de contacto -->

@endsection
@section('scripts')
  <script>
    let seleccionar  = document.getElementById('emailbusiness');
    seleccionar.addEventListener("change", () => {
      let idx = seleccionar.selectedIndex;
      let texto = seleccionar.options[idx].text;
      
      if (texto == "Oferta Tecnológica") {
        document.getElementById("body").placeholder = "Estimado visitante ingrese las necesidades que requira su entidad."
      }
      if (texto == "Patentes, Propiedad Intelectual y Publicaciones") {
        document.getElementById("body").placeholder = "Escribe tu mensaje"
      }
      if (texto == "Emprendimiento e Incubadora de Empresas") {
        document.getElementById("body").placeholder = "Escribe tu mensaje"
      }
      
    });
  </script>
@endsection