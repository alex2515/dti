@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Servicios
	    <small>Lista de Servicios</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Servicios</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.services.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
{{-- </div> --}}
@endsection