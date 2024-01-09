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
                                  <h4 class="font-weight-bolder"> Editar Registro de Tipo-Sensor</h4>
                                  <p class="mb-0">Edite el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="post" action="{{ route('tipo-sensores.update',$tipoSensore->id )}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="tipo">Tipo</label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="tipo" id="tipo" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}" value="{{ old('tipo', $tipoSensore->tipo) }}">
                                        @if ($errors->has('tipo'))
                                            <div class="invalid-feedback">{{ $errors->first('tipo') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <br>
                                        <div class="box-footer mt20">
                                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                                        </div>
                                        <div class="box-footer mt20">
                                            <button type="submit" class="btn btn-info">{{ __('Cerrar') }}</button>
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
