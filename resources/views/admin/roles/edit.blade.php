@extends('layouts.app')
@section('content')
    <section class="content-header">
      <h1>
        Roles
        <small>Lista de Roles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Roles</li>
      </ol>
    </section>
    <!-- /.content-header -->
    <section class="content">
        <div class="row">
            {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT', 'files' => true]) !!}
                
                @include('admin.roles.partials.form')

            {!! Form::close() !!}
        </div>
    </section>
{{-- </div> --}}
@endsection