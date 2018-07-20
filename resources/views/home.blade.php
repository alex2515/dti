@extends('layouts.app')

@section('content')

  <section class="content-header">
    <h1>
      Panel de Control
      <small>Tablero</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Panel de Control</li>
    </ol>
  </section>
  <!-- /.content-header -->

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Panel de Control</h3>
          </div>
                <!-- /.box-header -->
          <div class="box-body">
            @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h3>¡Bienvenido(a) a la Dirección de Transferencia e Innovación!</h3>
                <p>Preparamos algunos enlaces para que usted pueda comenzar:<a href="{{ route('dti') }}" class="btn">Ver mi sitio web</a></p>
                
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>44</h3>

                      <p>User Registrations</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <div class="timeline-body">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
         
          </div>
                <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->

@endsection
