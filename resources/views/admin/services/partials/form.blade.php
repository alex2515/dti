{{  Form::hidden('user_id', auth()->user()->id) }}

<div class="col-md-8">
	<div class="box  box-primary">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar un Servicio</h3><a href="{{ route('services.index') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
			{{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			<div class="form-group">
				{{ Form::label('name', 'Nombre del servicio (*)') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'id' =>'name', 'placeholder' => 'Nombre ...']) }}
			</div>
			{{-- <div class="form-group"> --}}
				{{-- {{ Form::label('slug', 'URL amigable') }} --}}
				{{ Form::hidden('slug', null, ['class' => 'form-control', 'id' =>'slug']) }}
			{{-- </div> --}}
			<div class="form-group">
				{{ Form::label('filepdf', 'URL de archivo (*)') }}
				{{ Form::text('filepdf', null, ['class' => 'form-control', 'id' =>'filepdf', 'placeholder' => 'URL del pdf ...']) }}
			</div>
			<div class="form-group">
				{{ Form::label('file', 'Imagen ') }}
				{{ Form::file('file') }}
				<p class="help-block">(tamaño recomendado ancho: 180px y alto 100px )</p>
			</div>
{{-- 			<div class="form-group">
				{{ Form::label('status', 'Estado') }}
				<label>
					{{ Form::radio('status', 'PUBLISHED', 'checked', ['class' => 'flat-red'])}} Publicado
				</label>
				<label>
					{{ Form::radio('status', 'DRAFT')}} Borrador
				</label>
			</div> --}}
			<div class="form-group">
				{{ Form::label('excerpt', 'Descripcion: (*)') }}
				{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2'])}}
				<p class="help-block pull-right">(máximo: 250 carácteres) </p>
			</div>
			{{-- <div class="form-group">
				{{ Form::label('body', 'Descripcion') }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			</div> --}}

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

<div class="col-md-4">
  <div class="box  box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tipo de Servicios</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    	<div class="form-group">
			{{ Form::label('category_id', 'Grupo de Servicios') }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control select2']) }}
		</div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</div>

@section('scripts')
<script src="{{ asset('adminlib/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<!-- CK Editor -->
<script src="{{ asset('adminlib/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		})

		 $('.select2').select2({
		 	language: "es",
		 	placeholder: 'Select an option'
		 })

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
