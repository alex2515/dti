@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Testimonios
	    <small>Lista de Testimonios</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Testimonios</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::model($testimony, ['route' => ['testimonies.update', $testimony->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.testimonies.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
{{-- </div> --}}
@endsection