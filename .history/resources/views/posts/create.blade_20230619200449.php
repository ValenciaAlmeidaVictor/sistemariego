<x-layout bodyClass="">

        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h4 class="font-weight-bolder">Registro de Invernadero</h4>
                                        <p class="mb-0">Rellene el Registro</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('posts.store') }}">
                                            @csrf
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="nombre"
                                                    value="{{ old('nombre') }}">
                                            </div>
                                            @error('nombre')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">ancho</label>
                                                <input type="text" class="form-control" name="ancho"
                                                    value="{{ old('ancho') }}">
                                            </div>
                                            @error('ancho')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Alto</label>
                                                <input type="text" class="form-control" name="alto">
                                            </div>
                                            @error('alto')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Largo</label>
                                                <input type="text" class="form-control" name="largo">
                                            </div>
                                            @error('largo')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Material Estructura</label>
                                                <input type="text" class="form-control" name="material_es">
                                            </div>
                                            @error('material_es')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Material envoltura</label>
                                                <input type="text" class="form-control" name="material_env">
                                            </div>
                                            @error('material_env')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
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
