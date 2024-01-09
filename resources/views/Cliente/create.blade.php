<x-layout bodyClass="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Registro de Plantas</h4>
                                    <p class="mb-0">Rellene el Registro</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('clientes.store') }}">
                                        @csrf
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">NOMBRE</label>
                                            <input type="text" class="form-control" name="nombre"
                                                value="{{ old('nombre') }}">
                                        </div>
                                        @error('nombre')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">DIRECCION</label>
                                            <input type="" class="form-control" name="direccion"
                                                value="{{ old('direccion') }}">
                                        </div>
                                        @error('direccion')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">TELEFONO</label>
                                            <input type="text" class="form-control" name="telefono"
                                            value="{{ old('telefono') }}">
                                        </div>
                                        @error('telefono')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
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
