<div class="form-group">
	{{ Form::label('type', 'Para un:') }} <br>
	<label>
		{{ Form::radio('type', 'EVENT') }} Evento
	</label>
	<label>
		{{ Form::radio('type', 'SERVICE') }} Servicio
	</label>
</div>
<div class="form-group">
	{{ Form::label('name', 'Nombre de la categoria') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' =>'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' =>'slug']) }}
</div>
<div class="form-group">
	{{ Form::label('icono', 'Buscar Icono') }}<a href="{{ route('icons') }}" target="_blank"> Ver iconos disponibles</a>
	{{ Form::text('icono', null, ['class' => 'form-control', 'id' =>'icono']) }}
</div>
<div class="form-group">
	{{ Form::label('body', 'Descripcion') }} 
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
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
	});
</script>
@endsection