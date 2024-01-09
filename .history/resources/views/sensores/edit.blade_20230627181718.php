<x-layout bodyClass="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Tipos planta</h4>
                                    <p class="mb-0">Rellene el Registro</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('index.update',$Sensor->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                                value="{{$Sensor->nombre }}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Descripion</label>
                                            <input type="" class="form-control" name="tipoSensor"
                                                value="{{$Sensor->tipoSensor }}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Costo</label>
                                            <input type="text" class="form-control" name="costo"
                                                value="{{$Sensor->costo }}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Cantidad</label>
                                            <input type="text" class="form-control" name="cantidad"
                                                value="{{$Sensor->cantidad }}">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Guardar</button>
                                                <div class="text-center">
                                                <button type="submit"
                                            class="btn btn-lg bg-gradient-success btn-lg w-100 mt-4 mb-0">Cerrar</button>
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