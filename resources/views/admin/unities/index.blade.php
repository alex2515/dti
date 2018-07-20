@extends('layouts.app')

@section('content')

	<section class="content-header">
	  <h1>
	    Unidades
	    <small>Lista de Unidades</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Unidad</li>
	  </ol>
	</section>
	<!-- /.content-header -->

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
		            <div class="box-header">
		            	<h3 class="box-title">Lista de Unidades</h3>
		            	@can('unities.create')
						<a href="{{ route('unities.create') }}" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Agregar</a>
						@endcan
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	@if($unities->isNotEmpty())
		            	<div class="table-responsive">
		            		<table id="example1" class="table table-striped table-bordered table-hover table-condensed" style="width:100%">
				                <thead style="background: #3b4044; color: #fff;">
					                <tr>
										<th width="20px">ID</th>
										<th>Nombre</th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
				                </thead>
				                <tbody>
					                @foreach($unities as $unity)
									<tr>
										<td>{{ $unity->id }}</td>
										<td>{{ $unity->name }}</td>
										<td width="10px">
											@can('unities.show')
											<a href="{{ route('unities.show', $unity->id) }}" class="btn btn-sm btn-warning">Ver</a>
											@endcan
										</td>
										<td width="10px">
											@can('unities.edit')
											<a href="{{ route('unities.edit', $unity->id) }}" class="btn btn-sm btn-success">Editar</a>
											@endcan
										</td>
										<td width="10px">
											@can('unities.destroy')
											<a href="" data-target="#modal-delete-{{$unity->id}}" data-toggle="modal"><button class="btn btn-sm btn-danger">Eliminar</button></a>
											@endcan
										</td>
									</tr>
									@include('admin.unities.partials.modal')
									@endforeach
				                </tbody>
				                <tfoot style="background: #3b4044; color: #fff;">
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
		            	@else
		            		<p class="text-red text-center"><strong>No hay categorias registrados.</strong></p>
		            	@endif	              
		            </div>
		            <!-- /.box-body -->
		        </div>
			</div>
		</div>
	</section>
	<!-- /.content -->


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