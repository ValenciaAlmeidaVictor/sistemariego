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
                                  <h4 class="font-weight-bolder"> Editar Registro de estado</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="post" action="{{ route('estados.update',$estado->id )}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group input-group-outline mt-3">
                                        <label  for="estado">Estado</label>
                                        <div class="input-group">
                                            <input type="text" name="estado" id="estado" value="{{ $estado->estado }}" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" placeholder="Estado">
                                            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
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
