@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        Eventos
        <small>Lista de Eventos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Eventos</li>
      </ol>
    </section>
    <!-- /.content-header -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Role</div>
                        <div class="panel-body">
                            <p><strong>Nombre:</strong> {{ $role->name }}</p>
                            <p><strong>Slug:</strong> {{ $role->slug }}</p>
                            <p><strong>Descripción:</strong> {{ $role->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
@endsection