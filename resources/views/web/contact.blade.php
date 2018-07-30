@extends('web.layouts')
@section('content')
@include('web.minav')
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
@endsection
@section('scripts')
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
@endsection