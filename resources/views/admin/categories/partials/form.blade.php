<div class="col-md-8 col-md-offset-2">
	<div class="box box-primary ">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nueva categoria</h3><a href="{{ route('categories.index') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
			{{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			<div class="form-group">
				{{ Form::label('name', 'Nombre de la categoria (*)') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'id' =>'name', 'placeholder' => 'Nombre ...']) }}
			</div>
			<div class="form-group"  >
				{{ Form::label('type', 'Para:') }} <br>
				<label>
					{{ Form::radio('type', 'EVENT', 'checked', ['class' => 'flat-red']) }} Evento
				</label>
				<label>
					{{ Form::radio('type', 'SERVICE', null, ['class' => 'flat-red']) }} Servicio
				</label>
			</div>
			<div class="form-group">
				{{-- {{ Form::label('slug', 'URL amigable') }} --}}
				{{ Form::hidden('slug', null, ['class' => 'form-control', 'id' =>'slug']) }}
			</div>
			<div class="form-group">
				
				{{ Form::label('icono', 'Buscar Icono (*)') }}
				<button type="button" class="btn btn-link pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Ver iconos disponibles</button>
				{{ Form::text('icon', null, ['class' => 'form-control', 'id' =>'icon', 'placeholder' => 'Icono ...']) }}
				<p class="help-block">(Ejem: fa fa-gg-circle) </p>
			</div>
			<div class="form-group">
				{{ Form::label('body', 'Descripción (*)') }} 
				{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '2']) }}
				<p class="help-block pull-right">(máximo: 200 carácteres) </p>
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
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
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
	});
</script>
@endsection