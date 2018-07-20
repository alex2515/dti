@extends('layouts.app')

@section('content')
	<section class="content-header">
	  <h1>
	    Portafolios
	    <small>Lista de Portafolios</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Portafolios</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">

		<div class="row">
			{!! Form::model($portfolio, ['route' => ['portfolios.update', $portfolio->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.portfolio.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
	
@endsection