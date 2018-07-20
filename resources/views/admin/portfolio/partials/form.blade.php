
<div class="col-md-8 col-md-offset-2">
	<div class="box box-primary">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nuevo Portafolio</h3> <a href="{{ route('portfolios.index') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
      {{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			{{  Form::hidden('user_id', auth()->user()->id) }}
      <div class="form-group">
        {{ Form::label('category_id', 'Seleccionar evento') }}
        {{ Form::select('post_id', $posts, null, ['class' => 'form-control inpt-lg select2']) }}
      </div>
			<div class="form-group">
				{{ Form::label('film', 'URL de video ') }}
				{{ Form::text('film', null, ['class' => 'form-control', 'id' =>'film', 'placeholder' => 'Ingrese el título aquí']) }}
			</div>
			<div class="form-group">
				{{ Form::label('body', 'Descripción (*)') }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{-- {{ Form::label('slug', 'URL amigable') }} --}}
				{{ Form::hidden('slug', null, ['class' => 'form-control', 'id' =>'slug','readonly']) }}
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

<!-- CK Editor -->
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
{{-- <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script> --}}
<script>
	$(document).ready(function(){
    $('.select2').select2()
	});
    // Replace the <textarea id="body"> with a CKEditor
    // instance, using default configuration.
	CKEDITOR.config.height = 100;
	CKEDITOR.config.width = 'auto';
	CKEDITOR.replace('body');
</script>
@endsection