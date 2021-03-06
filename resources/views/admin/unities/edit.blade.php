@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Unidades
	    <small>Lista de Unidades</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Unidades</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::model($unity, ['route' => ['unities.update', $unity->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.unities.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
{{-- </div> --}}
@endsection