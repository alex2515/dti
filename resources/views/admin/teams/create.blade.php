@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Integrantes
	    <small>Lista de Integrantes</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Integrantes</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::open(['route' => 'teams.store', 'files' => true]) !!}
			
				@include('admin.teams.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
	<!-- /.content -->
@endsection