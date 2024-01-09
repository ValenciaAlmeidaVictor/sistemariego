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
                                    <form method="post" action="{{ route('posts.update',$post->id )}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre"
                                            value="{{($post->nombre )}}">
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Ancho</label>
                                            <input type="text" class="form-control" name="ancho"
                                            value="{{($post->ancho )}}">
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Ancho</label>
                                            <input type="text" class="form-control" name="alto"
                                            value="{{($post->alto )}}">
                                        </div>
                                        @error('alto')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Largo</label>
                                            <input type="text" class="form-control" name="largo"
                                            value="{{$post->largo }}">
                                        </div>
                                        @error('largo')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Material Estructura</label>
                                            <input type="text" class="form-control" name="material_es"
                                            value="{{$post->material_es }}">
                                        </div>
                                        @error('material_es')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Material envoltura</label>
                                            <input type="text" class="form-control" name="material_env"
                                            value="{{ $post->material_env }}">
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
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</x-layout>



