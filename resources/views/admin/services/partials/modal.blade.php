<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$service->id}}">
	{!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'DELETE']) !!}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #ff4d4d; color: #fff;">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Servicio</h4>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar el servicio N° {{ $service->id }}</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn" style="background: #ff4d4d; color: #fff;">Confirmar</button>
			</div>
		</div>
	</div>
	{!!Form::Close()!!}
</div>