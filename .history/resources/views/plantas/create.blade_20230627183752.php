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
                                    <form method="post" action="{{route('plantas.store') }}">
                                        @csrf
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                                value="{{ old('nombre') }}">
                                        </div>
                                        @error('idTipo')
                                        <p class='text-danger inputerror'>{{ $planta }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">idTipo</label>
                                            <input type="" class="form-control" name="idTipo"
                                                value="{{ old('idTipo') }}">
                                            </div>
                                            @error('max_humedad')
                                            <p class='text-danger inputerror'>{{ $planta }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">max_humedad</label>
                                                <input type="" class="form-control" name="max_humedad"
                                                    value="{{ old('max_humedad') }}">
                                                    </div>
                                                </div>
                                                @error('max_luminusidad')
                                                <p class='text-danger inputerror'>{{ $planta }} </p>
                                                @enderror
                                                <div class="input-group input-group-outline mt-3">
                                                    <label class="form-label">max_luminusidad</label>
                                                    <input type="" class="form-control" name="max_luminusidad"
                                                        value="{{ old('max_luminusidad') }}">
                                                        </div>

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
