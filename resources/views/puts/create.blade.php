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
                                  <h4 class="font-weight-bolder">Registro de Dispositivos</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('puts.store') }}">
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
                                        <label class="form-label">Modelo</label>
                                        <input type="text" class="form-control" name="modelo"
                                            value="{{ old('modelo') }}">
                                    </div>
                                    @error('modelo')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion"
                                        value="{{ old('descripcion') }}">
                                    </div>
                                    @error('descripcion')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Alcance</label>
                                        <input type="text" class="form-control" name="alcance"
                                        value="{{ old('alcance') }}">
                                    </div>
                                    @error('alcance')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Tipo de Dispositivo</label>
                                        <input type="text" class="form-control" name="tipoDispositivo"
                                        value="{{ old('tipoDispositivo') }}">
                                    </div>
                                    @error('tipoDispositivo')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Historial Dispositivo</label>
                                        <input type="text" class="form-control" name="historialDispositivo"
                                        value="{{ old('historialDispositivo') }}">
                                    </div>
                                    @error('historialDispositivo')
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
