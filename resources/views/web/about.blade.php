@extends('web.welcome2')
@section('content')
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Nosotros</h3>
          <p>{{$company->description}}</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Oferta Tecnológica</a></h2>
              <p>
                La Unidad de Oferta Tecnológica es la encargada de identificar, organizar y transferir conocimiento producido como resultado de las investigaciones e innovación tecnológica a empresas y la sociedad. Brinda asesoramiento al sector público y privado en temas de su competencia.
              </p>
              <br>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Patentes, Propiedad Intelectual y Publicaciones</a></h2>
              <p>
                La Unidad de Patentes, Propiedad Intelectual y Publicaciones, es la encargada de brindar servicios de asesoría integral con miras a la protección, promoción y difusión de las creaciones intelectuales desarrollados por los miembros de la comunidad universitaria.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Emprendimiento e Incubadora de Empresas</a></h2>
              <p>
                La Unidad de Emprendimiento e Incubadora de Empresas, promueve la iniciativa de los estudiantes para la creación de pequeñas y micro empresas de propiedad de los estudiantes, brindando asesoría o facilidades en el uso de los equipos e instalaciones de la institución.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->
@endsection