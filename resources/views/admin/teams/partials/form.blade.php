<div class="col-md-8 col-md-offset-2">
	<div class="box box-primary ">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nuevo integrante</h3><a href="{{ route('teams.index') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
			{{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			<div class="form-group">
				{{ Form::label('name', 'Nombre (*)') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'id' =>'name', 'placeholder' => 'Nombre ...']) }}
			</div>
			<div class="form-group">
				{{ Form::label('occupation', 'Cargo y/o Puesto laboral (*)') }}
				{{ Form::text('occupation', null, ['class' => 'form-control', 'id' =>'occupation', 'placeholder' => 'Cargo ...']) }}
			</div>
			<div class="form-group">
				{{ Form::label('image', 'Seleccionar imagen (*)') }}
				{{ Form::file('file') }}
				<p class="help-block pull-right">(Tamaño recomendado: ancho 400px y alto 400px </p>
			</div>
			<hr>
			<label for="">Redes Sociales</label>
			<hr>
			<div class="form-group col-xs-6 has-success">
				{{ Form::label('twitter', 'Twitter') }}
				{{ Form::text('twitter',  null, ['class' => 'form-control', 'id' => 'twitter', 'placeholder' => 'Twitter ...']) }}
			</div>
			<div class="form-group col-xs-6 has-success">
				{{ Form::label('facebook', 'Facebook') }}
				{{ Form::text('facebook',  null, ['class' => 'form-control', 'id' => 'facebook', 'placeholder' => 'Facebook ...']) }}
			</div>
			<div class="form-group col-xs-6 has-success">
				{{ Form::label('gmail', 'Gmail') }}
				{{ Form::text('gmail',  null, ['class' => 'form-control', 'id' => 'gmail', 'placeholder' => 'Gmail ...']) }}
			</div>
			<div class="form-group col-xs-6 has-success">
				{{ Form::label('linkedin', 'Linkedin') }}
				{{ Form::text('linkedin',  null, ['class' => 'form-control', 'id' => 'linkedin', 'placeholder' => 'Linkedin ...']) }}
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #ffcc66;">
      	<button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Iconos</h4>
      </div>
      <div class="modal-body">
      	@include('admin.categories.partials.icon')
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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