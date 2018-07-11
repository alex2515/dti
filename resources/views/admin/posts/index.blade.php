@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
	<div class="row">
		<div class="col-md-12">

			{{-- <div class="panel panel-info">
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
			</div> --}}
			<div class="box">
	            <div class="box-header">
	            	<h3 class="box-title">Lista de Eventos</h3>
	            @can('posts.create')
					<a href="{{ route('posts.create') }}" class="btn btn-flat btn-primary pull-right">Crear</a>
				@endcan
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	            	<div class="table-responsive">
	            		<table id="example1" class="table table-striped table-bordered table-hover table-condensed" style="width:100%">
			                <thead>
				                <tr>
									<th width="20px">ID</th>
									<th>Nombre</th>
									<th></th>
									<th></th>
									<th></th>
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
										{{-- {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-sm btn-danger">Eliminar</button>
										{!! Form::close() !!} --}}
										<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-danger">Eliminar</button>
										@endcan
									</td>
								</tr>
								@endforeach
			                </tbody>
			                <tfoot>
				                <tr>
									<th>ID</th>
									<th>Nombre</th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
			                </tfoot>
			              </table>
	            	</div>	              
	            </div>
	            <!-- /.box-body -->
	        </div>
	        {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                Eliminar
              </button> --}}
			

		</div>
	</div>

	<div class="modal modal-default fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Eliminar Evento</h4>
          </div>
          <div class="modal-body">
            <p>Confirme si desea Eliminar el evento&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
            <button type="submit" class="btn btn-primary">Sí, deseo eliminar</button>
			{{-- <button class="btn btn-sm btn-danger">Eliminar</button> --}}
			{!! Form::close() !!}
            {{-- <button type="button" class="btn btn-outline">Sí, deseo eliminar</button> --}}
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
{{-- </div> --}}

@endsection
@section('scripts')
<script>
    $(document).ready( function() {
    	$('#example1').dataTable( {
    		"order": [[ 0, "desc" ]],

    		"language": {
		        "info": "Mostrando pagina _PAGE_ de _PAGES_",
		        "sInfoEmpty": "Mostrando 0 de 0 de 0 entidades",
		        "sLengthMenu": "Mostrar  _MENU_ entidades",
		        "sSearch": "Buscar:",
		        "paginate": {
		         	"sNext": "Siguiente",
		         	"sPrevious": "Anterior",
		         },
		        "sZeroRecords": "No se encontraron registros coincidentes",
		        "infoFiltered": " - filtrado desde _MAX_ registros"
	       }
	    });
    } );
</script>
@endsection