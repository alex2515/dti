@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Clientes
	    <small>Lista de Clientes</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Clientes</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::open(['route' => 'customers.store', 'files' => true]) !!}
			
				@include('admin.customers.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
	<!-- /.content -->
@endsection