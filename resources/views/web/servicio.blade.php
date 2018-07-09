@extends('web.welcome2')
@section('content')
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>Servicio de {{ $slug }}</h3>
          {{-- <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p> --}}
        </header>

        <div class="row">
          <table class="table table-hover table-striped table-sm">
            <thead class="thead-dark">
              <tr>
                <th></th>
                <th scope="col">Nombre</th>
                <th scope="col">Archivo</th>
              </tr>
            </thead>
            <tbody>
              @foreach($servicio as $ser)
              <tr>
                <td><img src="{{ asset('img/team-2.jpg') }}" alt="FOTO" class="img-fluid" width="180px" height="100px"></td>
                <td><h5><strong>{{ $ser->name }}</strong></h5><p>{{ $ser->excerpt }}</p></td>
                <td><a href="https://drive.google.com/file/d/1I2yl4XsQ0xOQezlx3lMpcTtZ89D4zlXY/view" target="blank" class="btn btn-success btn-sm"><span class="badge badge-success">Descargar <i class="ion-ios-download"></i></span></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>

      </div>
    </section><!-- #services -->
@endsection