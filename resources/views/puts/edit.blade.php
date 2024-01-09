@yield('sensor')

<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernadero"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Lista Invernadero"></x-navbars.navs.auth>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

  <main class="main-content  mt-0">
      <section>
          <div class="page-header min-vh-100">
              <div class="container">
                  <div class="row">
                          <div class="card card-plain">
                              <div class="card-header">
                                  <h4 class="font-weight-bolder"> Editar Registro de Historial</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="post" action="{{ route('puts.update',$put->id )}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control" name="nombre"
                                        value="{{($put->nombre )}}">
                                    </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label"></label>
                                            <input type="text" class="form-control" name="modelo"
                                            value="{{($put->modelo )}}">
                                        </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control" name="descripcion"
                                        value="{{($put->descripcion )}}">
                                    </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control" name="alcance"
                                        value="{{($put->alcance )}}">
                                    </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control" name="tipoDispositivo"
                                        value="{{($put->tipoDispositivo )}}">
                                    </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label"></label>
                                        <input type="text" class="form-control" name="historialDispositivo"
                                        value="{{($put->historialDispositivo )}}">
                                    </div>
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
