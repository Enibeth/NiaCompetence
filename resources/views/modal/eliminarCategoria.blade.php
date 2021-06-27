<!-- Modal -->
<div class="modal fade" id="eliminar-categoria-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-group" action="/eliminar_Categoria" method="POST" >
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Agregar Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              Estas seguro que quieres eliminar esta categoria? {{$item['item']}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-dangerous">Eliminar</button>
          </div>
      </form>
      </div>
    </div>
</div>