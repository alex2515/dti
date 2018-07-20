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
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							Ver Entrada
						</div>
						<div class="panel-body">
							{{-- <p><strong>Nombre:</strong> {{ $portfolio->name }}</p>
							<p><strong>Slug:</strong> {{ $portfolio->slug }}</p> --}}
							<p><strong>Contenido:</strong> {!! $portfolio->body !!}</p>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</section>

@endsection