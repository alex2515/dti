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
							@can('posts.create')
							<a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
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
							@foreach($posts as $post)
							<tr>
								<td>{{ $post->id }}</td>
								<td>{{ $post->name }}</td>
								<td width="10px">
									@can('posts.show')
									<a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
									@endcan
								</td>
								<td width="10px">
									@can('posts.edit')
									<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Editar</a>
									@endcan
								</td>
								<td width="10px">
									@can('posts.destroy')
									{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-sm btn-danger">Eliminar</button>
									{!! Form::close() !!}
									@endcan
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $posts->render() }}
				</div>
			</div>

			
		</div>
	</div>
{{-- </div> --}}

@endsection