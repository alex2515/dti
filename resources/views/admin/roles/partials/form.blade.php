<div class="col-md-10 col-md-offset-1">
	<div class="box box-primary ">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nuevo rol</h3><a href="{{ route('roles.index') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
			{{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			<div class="form-group">
				{{ Form::label('name', 'Nombre del Rol (*)') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre ...']) }}
			</div>
			<div class="form-group">
				{{-- {{ Form::label('slug', 'URL amigable') }} --}}
				{{ Form::hidden('slug', null, ['class' => 'form-control', 'id' =>'slug','readonly']) }}
			</div>
			<div class="form-group">
				{{ Form::label('description', 'Descripción (*)') }}
				{{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) }}
				<p class="help-block pull-right">(máximo: 200 carácteres) </p>
			</div>
			{{-- <hr>
			<h3>Permiso especial</h3>
			<div class="form-group">
				<label>{{ Form::radio('special','all-access', null, ['class' => 'flat-red'] )}} Acceso total</label>
				<label>{{ Form::radio('special','no-access', null, ['class' => 'flat-red'] )}} Ningun acceso</label>
			</div> --}}
			<hr>
			<h3>Lista de Permisos</h3>
			<label>{{ Form::checkbox('checkTodos', null, null, ['id' => 'checkTodos']) }} Marcar/Desmarcar Todos</label>
            <div class="table-responsive">
                <table id="example1" class="table table-striped table-bordered table-hover table-condensed" style="width:100%">
                    <thead style="background: #3b4044; color: #fff;">
                        <tr>
                            <th width="20px">Seleccionar</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permissions as $permission)
                        <tr>
                        	<td style="text-align: center;">{{ Form::checkbox('permissions[]', $permission->id, null) }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->description ? : 'Sin descripción'}}</td>
                            <td width="10px">

                            </td>
                            <td width="10px">

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot style="background: #3b4044; color: #fff;">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                  </table>
            </div> 
		</div>
		<div class="box-footer">
			<div class="form-group" style="text-align: center;">
				{{-- {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }} --}}
		        <button type="reset" class="btn btn-danger"><i class="fa  fa-times-circle"></i> Cancelar</button>
		        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Guargar</button>
			</div>
		</div>
	</div>
</div>
@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
        $(document).ready( function() {
            $('#example1').dataTable( {
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
		       },
		       // Solo para habilitar buscador
                "paging":   false,
		        "ordering": false,
		        "info":     false,

            });
        } );

	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		})
    // Select2
    $('.select2').select2()
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
    $('#checkTodos').change(function () {
		$("input:checkbox").prop('checked', $(this).prop("checked"));
	});

	});

</script>
@endsection

