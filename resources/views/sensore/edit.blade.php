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
                                  <h4 class="font-weight-bolder"> Editar Registro de Sensores</h4>
                                  <p class="mb-0">Edite el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="post" action="{{ route('sensores.update',$sensore->id )}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="form-label" for="nombre"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="nombre" id="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ old('nombre', $sensore->nombre) }}">
                                        @if ($errors->has('nombre'))
                                            <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="numero_serie"> </label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="numero_serie" id="numero_serie" class="form-control{{ $errors->has('numero_serie') ? ' is-invalid' : '' }}" value="{{ old('numero_serie', $sensore->numero_serie) }}">
                                        @if ($errors->has('numero_serie'))
                                            <div class="invalid-feedback">{{ $errors->first('numero_serie') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="modelo"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="modelo" id="modelo" class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}" value="{{ old('modelo', $sensore->modelo) }}">
                                        @if ($errors->has('modelo'))
                                            <div class="invalid-feedback">{{ $errors->first('modelo') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="descripcion"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="descripcion" id="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion', $sensore->descripcion) }}">
                                        @if ($errors->has('descripcion'))
                                            <div class="invalid-feedback">{{ $errors->first('descripcion') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="topic"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="topic" id="topic" class="form-control{{ $errors->has('topic') ? ' is-invalid' : '' }}" value="{{ old('topic', $sensore->topic) }}">
                                        @if ($errors->has('topic'))
                                            <div class="invalid-feedback">{{ $errors->first('topic') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="tipo_sensor_id"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <select name="tipo_sensor_id" id="tipo_sensor_id" class="form-control{{ $errors->has('tipo_sensor_id') ? ' is-invalid' : '' }}">
                                            <option value="">Seleccionar Tipo Sensor</option>
                                            @foreach($tipoSensores as $id => $tipoSensor)
                                                <option value="{{ $id }}" {{ $id == $sensore->tipo_sensor_id ? 'selected' : '' }}>{{ $tipoSensor }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('tipo_sensor_id'))
                                            <div class="invalid-feedback">{{ $errors->first('tipo_sensor_id') }}</div>
                                        @endif
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="estado_id"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <select name="estado_id" id="estado_id" class="form-control{{ $errors->has('estado_id') ? ' is-invalid' : '' }}">
                                            <option value="">Seleccionar Estado</option>
                                            @foreach($estados as $id => $estado)
                                                <option value="{{ $id }}" {{ $id == $sensore->estado_id ? 'selected' : '' }}>{{ $estado }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('estado_id'))
                                            <div class="invalid-feedback">{{ $errors->first('estado_id') }}</div>
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
