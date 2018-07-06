
<div class="col-md-9">
	<div class="box">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nueva entrada</h3>
		</div>
		<div class="box-body">
			{{  Form::hidden('user_id', auth()->user()->id) }}			
			<div class="form-group">
				{{-- {{ Form::label('name', 'Nombre del Evento') }} --}}
				{{ Form::text('name', null, ['class' => 'form-control input-lg', 'id' =>'name', 'placeholder' => 'Ingrese el título aquí']) }}
			</div>
			<div class="form-group">
				{{ Form::label('excerpt', 'Descripción pequeña (max: 200 caracteres)') }}
				{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2'])}}
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
  <div class="box collapsed-box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Lugar, Hora y Fecha</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    	<div class="form-group">
			{{ Form::label('date', 'Fecha') }}
			{{ Form::text('date', null, ['class' => 'form-control input-sm', 'id' =>'date']) }}
		</div>
		<div class="form-group">
			{{ Form::label('time', 'Hora') }}
			{{ Form::text('time', null, ['class' => 'form-control input-sm', 'id' =>'time']) }}
		</div>
		<div class="form-group">
			{{ Form::label('place', 'Lugar') }}
			{{ Form::text('place', null, ['class' => 'form-control input-sm', 'id' =>'place']) }}
		</div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<div class="col-md-3">
  <div class="box collapsed-box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Categoria</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    	<div class="form-group">
			{{ Form::label('category_id', 'Categoría de evento') }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
		</div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
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
			{{ Form::label('status', 'Estado') }}
			<label>
				{{ Form::radio('status', 'PUBLISHED')}} Publicado
			</label>
			<label>
				{{ Form::radio('status', 'DRAFT')}} Borrador
			</label>
		</div>
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
			{{ Form::label('file', 'Imagen Tamaño recomendado: (1100 x 450) px') }}
			{{ Form::file('file') }}
		</div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<div class="col-md-3">
  <div class="box collapsed-box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Etiquetas</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    	<div class="form-group">
			{{ Form::label('tags', 'Etiquetas') }}
			<div>
				@foreach($tags as $tag)
					<label>
						{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
					</label>
				@endforeach
			</div>
		</div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>




{{-- <div class="box-footer">
	<div class="form-group">
		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</div>
</div> --}}


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
	});
    // Replace the <textarea id="body"> with a CKEditor
    // instance, using default configuration.
	CKEDITOR.config.height = 400;
	CKEDITOR.config.width = 'auto';
	CKEDITOR.replace('body');
</script>
@endsection