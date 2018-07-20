@extends('layouts.app')

@section('content')

	<section class="content-header">
	  <h1>
	    Portafolios
	    <small>Lista de Portafolios</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Portafolios</li>
	  </ol>
	</section>
	<!-- /.content-header -->

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
		            <div class="box-header">
		            	<h3 class="box-title">Lista de Portafolios</h3>
		            	@can('portfolios.create')
						<a href="{{ route('portfolios.create') }}" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Agregar</a>
						@endcan
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		            	@if($portfolios->isNotEmpty())
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
					                @foreach($portfolios as $portfolio)
									<tr>
										<td>{{ $portfolio->id }}</td>
										<td>{{ $portfolio->name }}</td>
										<td width="10px">
											@can('portfolios.show')
											<a href="{{ route('portfolios.show', $portfolio->id) }}" class="btn btn-sm btn-warning">Ver</a>
											@endcan
										</td>
										<td width="10px">
											@can('portfolios.edit')
											<a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-success">Editar</a>
											@endcan
										</td>
										<td width="10px">
											@can('portfolios.destroy')
											<a href="" data-target="#modal-delete-{{$portfolio->id}}" data-toggle="modal"><button class="btn btn-sm btn-danger">Eliminar</button></a>
											@endcan
										</td>
									</tr>
									@include('admin.portfolio.partials.modal')
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
		            		<p class="text-red text-center"><strong>No hay portafolios registrados.</strong></p>
		            	@endif	  	              
		            </div>
		            <!-- /.box-body -->
		        </div>
			</div>
		</div>
	</section>
	<!-- /.content -->

	{{-- <div class="modal modal-default fade" id="modal-danger">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Eliminar Categoria</h4>
	      </div>
	      <div class="modal-body">
	        <p>Confirme si desea Eliminar el evento&hellip;</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
	        {!! Form::open(['route' => ['portfolios.destroy', $portfolio->id], 'method' => 'DELETE']) !!}            
	        <button type="submit" class="btn btn-primary">Sí, deseo eliminar</button>
			{!! Form::close() !!}
	      </div>
	    </div>
	    <!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
	</div> --}}
	<!-- /.modal -->
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