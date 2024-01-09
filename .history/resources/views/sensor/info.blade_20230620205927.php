

  <!-- Modal -->
  <div class="modal fade" id="edit{{$sensor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Sensor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('sensor.update',$sensor->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">NOMBRE:</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$sensor->nombre}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">DESCRIPCION:</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$sensor->descripcion}}">
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





