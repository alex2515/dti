@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista de Servicios
					@can('services.create')
					<a href="{{ route('services.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
					@endcan
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
							@foreach($services as $service)
							<tr>
								<td>{{ $service->id }}</td>
								<td>{{ $service->name }}</td>
								<td width="10px">
									@can('services.show')
									<a href="{{ route('services.show', $service->id) }}" class="btn btn-sm btn-default">Ver</a>
									@endcan
								</td>
								<td width="10px">
									@can('services.edit')
									<a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-default">Editar</a>
									@endcan
								</td>
								<td width="10px">
									@can('services.destroy')
									{!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-sm btn-danger">Eliminar</button>
									{!! Form::close() !!}
									@endcan
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $services->render() }}
				</div>
			</div>

			
		</div>
	</div>
</div>

@endsection