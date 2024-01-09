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
                                  <h4 class="font-weight-bolder">Registro de Lectura-Sensores</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('lecturas-sensores.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="fecha_inicio"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $lecturasSensore->fecha_inicio }}" class="form-control{{ $errors->has('fecha_inicio') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="hora_lectura"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="time" name="hora_lectura" id="hora_lectura" value="{{ $lecturasSensore->hora_lectura }}" class="form-control{{ $errors->has('hora_lectura') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('hora_lectura', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label" for="valor">Valor</label>
                                        <input type="text" name="valor" id="valor" value="{{ $lecturasSensore->valor }}" class="form-control{{ $errors->has('valor') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label for="sensor_id"></label>
                                        <select name="sensor_id" id="sensor_id" class="form-control{{ $errors->has('sensor_id') ? ' is-invalid' : '' }}">
                                            <option value="">Seleccionar Sensor</option>
                                            @foreach ($sensores as $key => $value)
                                                <option value="{{ $key }}" {{ $key == $lecturasSensore->sensor_id ? 'selected' : '' }}>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('sensor_id', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>                                    
                                    <br>
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
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
