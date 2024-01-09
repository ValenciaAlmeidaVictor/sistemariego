
<!-- Modal -->
<div class="modal fade" id="edit{{$sensor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('sensores.update',$sensor->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$sensor->nombre}}">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Tipo de sensor</label>
          <input type="text"
            class="form-control" name="tipoSensor" id="" aria-describedby="helpId" placeholder="" value="{{$sensor->tipoSensor}}">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Costo</label>
          <input type="text"
            class="form-control" name="costo" id="" aria-describedby="helpId" placeholder="" value="{{$sensor->costo}}">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Cantidad</label>
          <input type="text"
            class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="" value="{{$sensor->cantidad}}">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>






<!-- Modal delete-->
<div class="modal fade" id="delete{{$sensor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('sensores.destroy', $sensor->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
      <div class="modal-body">
        ¿Estás seguro de aliminar a <strong> {{$sensor->nombre}} ?</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>