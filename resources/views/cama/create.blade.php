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
                                  <h4 class="font-weight-bolder">Registro de Camas</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('camas.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf
                                        <div class="box box-info padding-1">
                                        <div class="box-body">
                                    
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label" for="nombre">Nombre</label>
                                                <input type="text" name="nombre" id="nombre" value="{{ $cama->nombre }}" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}">
                                                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label" for="largo">Largo</label>
                                                <input type="text" name="largo" id="largo" value="{{ $cama->largo }}" class="form-control{{ $errors->has('largo') ? ' is-invalid' : '' }}">
                                                {!! $errors->first('largo', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label" for="ancho">Ancho</label>
                                                <input type="text" name="ancho" id="ancho" value="{{ $cama->ancho }}" class="form-control{{ $errors->has('ancho') ? ' is-invalid' : '' }}">
                                                {!! $errors->first('ancho', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label" for="invernadero_id"></label>
                                                <select name="invernadero_id" id="invernadero_id" class="form-control{{ $errors->has('invernadero_id') ? ' is-invalid' : '' }}">
                                                    <option value="">Seleccionar Invernadero</option>
                                                    @foreach ($invernaderos as $id => $nombre)
                                                        <option value="{{ $id }}" {{ $cama->invernadero_id == $id ? 'selected' : '' }}>{{ $nombre }}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('invernadero_id', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="box-footer mt20">
                                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                                        </div>
                                    </div>
                                </div>
                                </form> 
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
