<!-- Modal -->
<div class="modal fade" id="agregar-categoria-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-group" action="/agregar_Categoria" method="POST" autocomplete="off">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Agregar Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            
              <div class="form-group">
                <label for="nombreCategoria">Nombre: </label>
                <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" placeholder="Nombre">
              </div>

              <div class="form-group">
                <label for="iconoCategoria">Icono (https://remixicon.com)</label>
                <input type="text" class="form-control" id="iconoCategoria" name="iconoCategoria" placeholder="Icono">
              </div>
              <small id="emailHelp" class="form-text text-muted">Buscar el icono en https://remixicon.com <br />
                  Copiar el contenido dentro de "class"   
              </small>
              <br />
              <div class="form-group">
                <label for="colorCategoria">Color</label>
                <input type="text" class="form-control" id="colorCategoria" name="colorCategoria" placeholder="Color">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
      </form>
      </div>
    </div>
</div>