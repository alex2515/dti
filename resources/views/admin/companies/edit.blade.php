@extends('layouts.app')
@section('content')
	<section class="content-header">
	  <h1>
	    Compañia
	    <small>Lista de Compañia</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Compañia</li>
	  </ol>
	</section>
	<!-- /.content-header -->
	<section class="content">
		<div class="row">
			{!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'PUT', 'files' => true]) !!}
				
				@include('admin.companies.partials.form')

			{!! Form::close() !!}
		</div>
	</section>
{{-- </div> --}}
@endsection