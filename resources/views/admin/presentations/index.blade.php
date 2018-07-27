@extends('layouts.app')

@section('content')

	<section class="content-header">
	  <h1>
	    Presentación
	    <small>Lista de Presentación</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Presentación</li>
	  </ol>
	</section>
	<!-- /.content-header -->

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
		            <div class="box-header">
		            	<h3 class="box-title">Lista de Presentación</h3>
		            	@can('presentations.create')
						<a href="{{ route('presentations.create') }}" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Agregar</a>
						@endcan
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	@if($presentations->isNotEmpty())
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
					                @foreach($presentations as $presentation)
									<tr>
										<td>{{ $presentation->id }}</td>
										<td>{{ $presentation->name }}</td>
										<td width="10px">
											@can('presentations.show')
											<a href="{{ route('presentations.show', $presentation->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-eye" style="font-size: 15px;"></i></a>
											@endcan
										</td>
										<td width="10px">
											@can('presentations.edit')
											<a href="{{ route('presentations.edit', $presentation->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o" style="font-size: 15px;"></i></a>
											@endcan
										</td>
										<td width="10px">
											@can('presentations.destroy')
											<a href="" data-target="#modal-delete-{{$presentation->id}}" data-toggle="modal"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" style="font-size: 15px;"></i></button></a>
											@endcan
										</td>
									</tr>
									@include('admin.presentations.partials.modal')
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
		            		<p class="text-red text-center"><strong>No hay fotos de presentación registrados.</strong></p>
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