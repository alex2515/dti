@extends('web.layouts')
@section('content')
@include('web.minav')
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
            {{-- <div class="icon"><i class="ion-checkmark-circled"></i></div> --}}
            <div class="icon"><i class="{{ $service->icon }}"></i></div>
            <h4 class="title"><a href="{{ route('servicio', $service->slug) }}">{{ $service->name }}</a></h4>
            <p class="description">{{ substr($service->body, 0,150) }}...</p>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- #services -->
@endsection