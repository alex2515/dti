<div class="col-md-8 col-md-offset-2">
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
				{{ Form::hidden('slug', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('description', 'Descripción (*)') }}
				{{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) }}
				<p class="help-block pull-right">(máximo: 200 carácteres) </p>
			</div>
			<hr>
			<h3>Permiso especial</h3>
			<div class="form-group">
				<label>{{ Form::radio('special','all-access' )}} Acceso total</label>
				<label>{{ Form::radio('special','no-access' )}} Ningun acceso</label>
			</div>
			<hr>
			<h3>Lista de Permisos</h3>
			<div class="form-group">
				<ul class="list-unstyled">
					@foreach($permissions as $permission)
					<li>
						<label>
							{{ Form::checkbox('permissions[]', $permission->id, null) }}
							{{ $permission->name }}
							<em>( {{ $permission->description ? : 'Sin descripción'}} )</em>
						</label>
					</li>
					@endforeach
				</ul>
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
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		})
	});
</script>
@endsection

