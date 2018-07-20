<div class="col-md-8 col-md-offset-2">
	<div class="box box-primary ">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nuevo cliente o Patrocinador</h3><a href="{{ route('customers.index') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
			{{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			<div class="form-group">
				{{ Form::label('name', 'Nombre de la cliente (*)') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'id' =>'name', 'placeholder' => 'Nombre ...']) }}
			</div>
			<div class="form-group has-success">
				{{ Form::label('image', 'Seleccionar imagen') }}
				{{ Form::file('file') }}
				<p class="help-block">(Tamaño recomendado: ancho 300px y alto 70px </p>
			</div>
		</div>
		<div class="box-footer">
			<div class="form-group" style="text-align: center;">
		        <button type="reset" class="btn btn-danger"><i class="fa  fa-times-circle"></i> Cancelar</button>
		        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Guargar</button>
			</div>
		</div>
	</div>
</div>
@section('scripts')
<script>
	$(document).ready(function(){
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
	});
</script>
@endsection