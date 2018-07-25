@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Presentación
	    <small>Lista de Presentación</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Presentación</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::model($presentation, ['route' => ['presentations.update', $presentation->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.presentations.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
{{-- </div> --}}
@endsection