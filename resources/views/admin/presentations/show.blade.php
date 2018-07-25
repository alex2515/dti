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
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							Ver Unidad
						</div>
						<div class="panel-body">
							<p><strong>Nombre:</strong> {{ $unity->name }}</p>
							<p><strong>Slug:</strong> {{ $unity->slug }}</p>
							<p><strong>Contenido:</strong> {{ $unity->body }}</p>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</section>

@endsection