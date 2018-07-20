@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Categorias
	    <small>Lista de Categorias</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Categorias</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::open(['route' => 'categories.store', 'files' => true]) !!}
			
				@include('admin.categories.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
	<!-- /.content -->
@endsection