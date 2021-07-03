<!-- Modal -->
<div class="modal fade" id="editar-categoria-modal{{$item['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-group" action="/editar_Categoria/{{$item['id']}}" method="POST" autocomplete="off">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Editar Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            
              <div class="form-group">
                <label for="nombreCategoria">Nombre: </label>
                <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" placeholder="Nombre"
                    value="{{$item['nombre']}}">
              </div>

              <div class="form-group">
                <label for="iconoCategoria">Icono (https://remixicon.com)</label>
                <input type="text" class="form-control" id="iconoCategoria" name="iconoCategoria" placeholder="Icono"
                    value="{{$item['icono']}}">
              </div>
              <small id="emailHelp" class="form-text text-muted">Buscar el icono en https://remixicon.com <br />
                  Copiar el contenido dentro de "class"   
              </small>
              <br />
              <div class="form-label">
                <label for="colorCategoria">Color</label>
                <input type="color" class="form-label" id="colorCategoria" name="colorCategoria" placeholder="Color"
                value="{{$item['color']}}">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
      </form>
      </div>
    </div>
</div>