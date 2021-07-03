<!-- Modal -->
<div class="modal fade" id="eliminar-categoria-modal{{$item['id']}}" role="dialog"
          aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-group" action="/eliminar_Categoria/{{$item['id']}}" method="POST" autocomplete="off">
          @csrf
        <div class="modal-body">
          Esta seguro que quiere eliminar la categoria {{$item['nombre']}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>
    </form>
    </div>
  </div>
</div>