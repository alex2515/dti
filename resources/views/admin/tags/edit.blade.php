@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Etiquetas
	    <small>Lista de Etiquetas</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Etiquetas</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.tags.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
{{-- </div> --}}
@endsection