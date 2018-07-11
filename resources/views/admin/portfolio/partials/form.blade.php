
<div class="col-md-9">
	<div class="box">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nuevo Portafolio</h3>
		</div>
		<div class="box-body">
			{{  Form::hidden('user_id', auth()->user()->id) }}
      <div class="form-group">
        {{ Form::label('category_id', 'Seleccionar evento') }}
        {{ Form::select('post_id', $posts, null, ['class' => 'form-control inpt-lg select2']) }}
      </div>

			<div class="form-group">
				{{ Form::label('film', 'URL de video') }}
				{{ Form::text('film', null, ['class' => 'form-control input-lg', 'id' =>'film', 'placeholder' => 'Ingrese el título aquí']) }}
			</div>
			<div class="form-group">
				{{ Form::label('body', 'Descripcion Completa') }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{-- {{ Form::label('slug', 'URL amigable') }} --}}
				{{ Form::hidden('slug', null, ['class' => 'form-control', 'id' =>'slug','readonly']) }}
			</div>

		</div>
		<div class="box-footer">
			
		</div>
	</div>
</div>


<div class="col-md-3">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Publicar</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    	<div class="form-group">
			{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-default']) }}
		</div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<div class="col-md-3">
  <div class="box collapsed-box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Imagen</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    	<div class="form-group">
			{{ Form::label('file', 'Imagen') }}
			{{ Form::file('file') }}
      <p class="help-block">(Tamaño recomendado ancho: 1100px y alto 450px </p>
		</div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>



@section('scripts')

<!-- CK Editor -->
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
{{-- <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script> --}}
<script>
	$(document).ready(function(){
    $('.select2').select2()
	});
    // Replace the <textarea id="body"> with a CKEditor
    // instance, using default configuration.
	CKEDITOR.config.height = 200;
	CKEDITOR.config.width = 'auto';
	CKEDITOR.replace('body');
</script>
@endsection