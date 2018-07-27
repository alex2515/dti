<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$post->id}}">
	{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #ff4d4d; color: #fff;">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Evento</h4>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar el Evento N° {{ $post->id }}</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn" style="background: #ff4d4d; color: #fff;">Confirmar</button>
			</div>
		</div>
	</div>
	{!!Form::Close()!!}
</div>