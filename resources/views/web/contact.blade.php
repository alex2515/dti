@extends('web.layouts')
@section('content')
  @include('web.minav')
  @include('web.partials.contacto')
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