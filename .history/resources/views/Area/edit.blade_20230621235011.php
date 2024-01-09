<x-layout bodyClass="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Edita el Registro</h4>
                                    <p class="mb-0">Edite el Registro</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{route('area.update', $area->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                            value="{{($area->nombre )}}">
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Largo</label>
                                            <input type="text" class="form-control" name="largo"
                                            value="{{($area->largo)}}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Ancho</label>
                                            <input type="text" class="form-control" name="ancho"
                                            value="{{($area->ancho )}}">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Guardar</button>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cerrar</button>
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
