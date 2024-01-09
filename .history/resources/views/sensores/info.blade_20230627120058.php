<x-layout bodyClass="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Agregar Sensores</h4>
                                    <p class="mb-0">Rellene el Registro</p>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('Sensores.update',$Sensor->nombre) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                                value="{{$Sensor->nombre}}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Tipo De sensores</label>
                                            <input type="text" class="form-control" name="tipoSensor"
                                                value="{{$Sensor->tipoSensor}}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">COSTO</label>
                                            <input type="text" class="form-control" name="costo"
                                                value="{{$Sensor->costo}}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">CANTIDAD</label>
                                            <input type="number" class="form-control" name="cantidad"
                                                value="{{$Sensor->cantidad}}">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Guardar</button>
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
