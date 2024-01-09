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
                                    <form method="post" action="{{ route('saras.update',$sara->id )}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                            value="{{($sara->nombre )}}">
                                            @error('nombre')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Tipo Sensor</label>
                                                <input type="text" class="form-control" name="tipoSensor"
                                                value="{{($sara->tipoSensor )}}">
                                                @error('tipoSensor')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Costo</label>
                                            <input type="text" class="form-control" name="costo"
                                            value="{{($sara->costo )}}">
                                        </div>
                                        @error('costo')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Cantidad</label>
                                            <input type="text" class="form-control" name="cantidad"
                                            value="{{($sara->cantidad )}}">
                                        </div>
                                        @error('cantidad')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
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



