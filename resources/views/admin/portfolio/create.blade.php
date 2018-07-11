@extends('layouts.app')

@section('content')

	<div class="row">
		{{-- <div class="col-md-12"> --}}

			{{-- <div class="box box-primary">
				<div class="box-header  with-border">
					<h3 class="box-title">Agregar nueva entrada</h3>
				</div>
				<div class="box-body"> --}}
					{!! Form::open(['route' => 'portfolios.store', 'files' => true]) !!}
					
						@include('admin.portfolio.partials.form')

					{!! Form::close() !!}
				{{-- </div>
				
			</div> --}}
			{{-- <div class="panel panel-default">
				<div class="panel-heading">
					Agregar nueva entrada
				</div>
				<div class="panel-body">
					{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
					
						@include('admin.posts.partials.form')

					{!! Form::close() !!}
				</div>
			</div> --}}

			
		{{-- </div> --}}
	</div>


@endsection