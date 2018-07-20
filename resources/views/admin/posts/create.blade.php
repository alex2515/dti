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
		<div class="row">
			{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
			
				@include('admin.posts.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
	<!-- /.content -->
@endsection