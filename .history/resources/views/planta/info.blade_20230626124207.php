

  <!-- Modal -->
  <div class="modal fade" id="edit{{$planta->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Planta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('planta.update',$planta->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">NOMBRE:</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$planta->nombre}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">DESCRIPCIÓN:</label>
            <input type="text"
              class="form-control" name="descripción" id="" aria-describedby="helpId" placeholder="" value="{{$planta->descripción}}">
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





  <x-layout bodyClass="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Editar Formulario</h4>
                                    <p class="mb-0">Edite el Registro</p>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('planta.update',$planta->id )}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                            value="{{($planta->nombre )}}">
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Descripcion</label>
                                            <input type="text" class="form-control" name="descripcion"
                                            value="{{($planta->descripcion )}}">
                                        </div>
                                        @enderror
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Guardar</button>
                                                <div class="text-center">
                                                    <button type="submit"
                                                        class="btn btn-lg bg-gradient-success btn-lg w-100 mt-4 mb-0">Cerrar</button>
                                                </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </main>
</div>
</x-layout>



