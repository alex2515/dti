<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$tag->id}}">
	{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #ff4d4d; color: #fff;">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">¿Estas seguro de eliminar la etiqueta <strong>{{ $tag->name }}</strong>?</h4>
			</div>
			<div class="modal-body" style="color: #000;">
				<strong>ADVERTENCIA! <i class="fa fa-exclamation-triangle"></i></strong>
				<ul>
					<li>También se eliminarán los EVENTOS y SERVICIOS relacionados a esta categoría.</li>
				</ul>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn " style="background: #ff4d4d; color: #fff;">Confirmar</button>
			</div>
		</div>
	</div>
	{!!Form::Close()!!}
</div>