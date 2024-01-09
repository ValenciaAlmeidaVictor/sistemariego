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
                                  <h4 class="font-weight-bolder">Editar Camas sensores</h4>
                                  <p class="mb-0">Edite el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('camas-sensores.update', $camasSensore->id) }}"  role="form" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="box box-info padding-1">
                                        <div class="box-body">
                                            <div class="input-group input-group-outline mt-3">
                                                <label for="fecha_instalacion">Fecha Instalación</label>
                                                <div class="input-group">
                                                    <input type="date" name="fecha_instalacion" id="fecha_instalacion" value="{{ $camasSensore->fecha_instalacion }}" class="form-control{{ $errors->has('fecha_instalacion') ? ' is-invalid' : '' }}" placeholder="Fecha Instalación">
                                                    {!! $errors->first('fecha_instalacion', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>
                                            <div class="input-group input-group-outline mt-3">
    <label for="cama_id">Camas Id</label>
    <div class="input-group">
        <select name="cama_id" id="cama_id" class="form-control{{ $errors->has('cama_id') ? ' is-invalid' : '' }}" placeholder="Camas Id">
            <option value="">Seleccione una cama</option>
            @foreach($camas as $key => $value)
    <option value="{{ $key }}"{{ $camasSensore->cama_id == $key ? ' selected' : '' }}>{{ $value }}</option>
@endforeach

        </select>
        {!! $errors->first('cama_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

                                            <div class="input-group input-group-outline mt-3">
                                                <label for="sensor_id">Sensor Id</label>
                                                <div class="input-group">
                                                    <select name="sensor_id" id="sensor_id" class="form-control{{ $errors->has('sensor_id') ? ' is-invalid' : '' }}" placeholder="Sensor Id">
                                                        <option value="">Seleccione un sensor</option>
                                                        @foreach($sensores as $key => $value)
                                                            <option value="{{ $key }}"{{ $camasSensore->sensor_id == $key ? ' selected' : '' }}>{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                    {!! $errors->first('sensor_id', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
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
