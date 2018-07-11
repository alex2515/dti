@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>
						<strong>
							Lista de Eventos
							@can('portfolios.create')
							<a href="{{ route('portfolios.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
							@endcan
						</strong>
					</h4>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nombre</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($portfolios as $portfolio)
							<tr>
								<td>{{ $portfolio->id }}</td>
								<td>{{ $portfolio->name }}</td>
								<td width="10px">
									@can('portfolios.show')
									<a href="{{ route('portfolios.show', $portfolio->id) }}" class="btn btn-sm btn-default">Ver</a>
									@endcan
								</td>
								<td width="10px">
									@can('portfolios.edit')
									<a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-default">Editar</a>
									@endcan
								</td>
								<td width="10px">
									@can('portfolios.destroy')
									{!! Form::open(['route' => ['portfolios.destroy', $portfolio->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-sm btn-danger">Eliminar</button>
									{!! Form::close() !!}
									@endcan
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $portfolios->render() }}
				</div>
			</div>

			
		</div>
	</div>
{{-- </div> --}}

@endsection