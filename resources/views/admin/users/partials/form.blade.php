<div class="col-md-8 col-md-offset-2">
	<div class="box box-primary ">
		<div class="box-header  with-border">
			<h3 class="box-title">Agregar nueva entrada</h3><a href="{{ route('users.index') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
			{{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			<div class="form-group">
				{{ Form::label('name', 'Nombre del Usuario (*)') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre ...']) }}
			</div>
			<hr>
			<h3>Lista de Roles</h3>
			<div class="form-group">
				<ul class="list-unstyled">
					@foreach($roles as $role)
					<li>
						<label>
							{{ Form::checkbox('roles[]', $role->id, null) }}
							{{ $role->name }}
							<em>( {{ $role->description ? : 'Sin descripción'}} )</em>
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
<script src="{{ asset('adminlib/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
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


