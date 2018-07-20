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
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							Ver Categoria
						</div>
						<div class="panel-body">
							<p><strong>Nombre:</strong> {{ $category->name }}</p>
							<p><strong>Slug:</strong> {{ $category->slug }}</p>
							<p><strong>Contenido:</strong> {{ $category->body }}</p>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</section>

@endsection