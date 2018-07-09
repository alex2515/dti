{{  Form::hidden('user_id', auth()->user()->id) }}

<div class="col-md-8">
	<div class="box box-solid box-primary">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar un Servicio</h3>
		</div>
		<div class="box-body">
			
			<div class="form-group">
				{{ Form::label('name', 'Nombre del servicio') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'id' =>'name']) }}
			</div>
			{{-- <div class="form-group"> --}}
				{{-- {{ Form::label('slug', 'URL amigable') }} --}}
				{{ Form::hidden('slug', null, ['class' => 'form-control', 'id' =>'slug']) }}
			{{-- </div> --}}
			<div class="form-group">
				{{ Form::label('filepdf', 'URL de archivo') }}
				{{ Form::text('filepdf', null, ['class' => 'form-control', 'id' =>'slug']) }}
			</div>
			<div class="form-group">
				{{ Form::label('file', 'Imagen ') }}
				{{ Form::file('file') }}
				<p class="help-block">(tamaño recomendado ancho: 180px y alto 100px )</p>
			</div>
			<div class="form-group">
				{{ Form::label('status', 'Estado') }}
				<label>
					{{ Form::radio('status', 'PUBLISHED')}} Publicado
				</label>
				<label>
					{{ Form::radio('status', 'DRAFT')}} Borrador
				</label>
			</div>
			<div class="form-group">
				{{ Form::label('excerpt', 'Descripcion: max 250 caracteres') }}
				{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2'])}}
			</div>
			{{-- <div class="form-group">
				{{ Form::label('body', 'Descripcion') }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			</div> --}}
			<div class="form-group">
				{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
			</div>
		</div>
		<div class="box-footer">

		</div>
	</div>
</div>

<div class="col-md-4">
  <div class="box box-solid box-primary">
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
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<!-- CK Editor -->
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
{{-- <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script> --}}
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		})

		 $('.select2').select2()

		 // Red color scheme for iCheck
	    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
	      checkboxClass: 'icheckbox_minimal-red',
	      radioClass   : 'iradio_minimal-red'
	    })

	});

	// $(function () {

 //    	$('.select2').select2()
 //      })

</script>

@endsection
