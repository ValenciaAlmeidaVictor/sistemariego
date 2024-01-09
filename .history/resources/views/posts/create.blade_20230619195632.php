<x-layout bodyClass="">

        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h4 class="font-weight-bolder">Formulario</h4>
                                        <p class="mb-0">Rellene el Registro</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('posts.store') }}">
                                            @csrf
           <label>NOMBRE</label>
           <input type="text" name="nombre" class="form-control mb-3" value="">
           <label>ANCHO</label>
           <input type="text" name="ancho" class="form-control mb-3" value="">
           <label>ALTO</label>
           <input type="text" name="alto" class="form-control mb-3" value="">
           <label>LARGO</label>
           <input type="text" name="Largo" class="form-control mb-3" value="">
           <label>MATERIAL ESTRUCTURA</label>
           <input type="text" name="material_es" class="form-control mb-3" value="">
           <label>MATERIAL ENVOLTURA</label>
           <input type="text" name="material_env" class="form-control mb-3" value="">
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
                </div>
            </section>
        </main>
    </div>
</x-layout>
