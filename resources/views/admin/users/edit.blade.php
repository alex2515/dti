@extends('layouts.app')
@section('content')
    <section class="content-header">
      <h1>
        Usuarios
        <small>Lista de Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>
    <!-- /.content-header -->
    <section class="content">
        <div class="row">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
                
                @include('admin.users.partials.form')

            {!! Form::close() !!}
        </div>
    </section>
{{-- </div> --}}
@endsection