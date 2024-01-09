<!-- Modal -->
<div class="modal fade" id="delete{{$planta->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar planta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('index.destroy',$planta->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">
          Estas seguro de eliminar a <strong> {{$planta->nombre}} ?</strong>
        </div>
        <div class="modal-footer">
            <button type="button" style="background-color: chartreuse" data-dismiss="modal">Cerrar</button>
            <button type="submit" style="background-color: chartreuse" >Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
