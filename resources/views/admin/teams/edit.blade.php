@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Equipo de Trabajo
	    <small>Lista de Equipo de Trabajo</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Equipo de Trabajo</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::model($team, ['route' => ['teams.update', $team->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.teams.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
{{-- </div> --}}
@endsection