@extends('web.layouts')
@section('content')
@include('web.minav')
    <section id="services">
        <div class="container">
            <header class="section-header wow fadeInUp">
                <h3>Servicio de {{ $slug }}</h3>
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
                                <td><img src="{{ $ser->file }}" alt="FOTO" class="img-fluid" width="180px" height="100px"></td>
                                <td><h5><strong>{{ $ser->name }}</strong></h5><p>{{ $ser->excerpt }}</p></td>
                                <td>
                                    <a href="{{ $ser->filepdf }}" target="blank" class="btn btn-success btn-sm">
                                        <span class="badge badge-success">Ver 
                                            <!-- <i class="ion-ios-download"></i> -->
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $servicio->links('vendor/pagination/bootstrap-4') }}
            </div>
        </div>
    </section>
    <!-- Fin de servicios -->
@endsection