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
                                  <h4 class="font-weight-bolder">Registro de Cultivos </h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('cultivos.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf
                                        <div class="box box-info padding-1">
                                            <div class="box-body">
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="nombre">Nombre</label>
                                                        <input type="text" id="nombre" name="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" value="{{ $cultivo->nombre }}">
                                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="descripcion">Descripcion</label>
                                                        <input type="text" id="descripcion" name="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ $cultivo->descripcion }}">
                                                        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="min_humedad">Min Humedad</label>
                                                        <input type="text" id="min_humedad" name="min_humedad" class="form-control{{ $errors->has('min_humedad') ? ' is-invalid' : '' }}" value="{{ $cultivo->min_humedad }}">
                                                        {!! $errors->first('min_humedad', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="max_humedad">Max Humedad</label>
                                                        <input type="text" id="max_humedad" name="max_humedad" class="form-control{{ $errors->has('max_humedad') ? ' is-invalid' : '' }}" value="{{ $cultivo->max_humedad }}">
                                                        {!! $errors->first('max_humedad', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="min_luminosidad">Min Luminosidad</label>
                                                        <input type="text" id="min_luminosidad" name="min_luminosidad" class="form-control{{ $errors->has('min_luminosidad') ? ' is-invalid' : '' }}" value="{{ $cultivo->min_luminosidad }}">
                                                        {!! $errors->first('min_luminosidad', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="max_luminosidad">Max Luminosidad</label>
                                                        <input type="text" id="max_luminosidad" name="max_luminosidad" class="form-control{{ $errors->has('max_luminosidad') ? ' is-invalid' : '' }}" value="{{ $cultivo->max_luminosidad }}">
                                                        {!! $errors->first('max_luminosidad', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="min_temperatura">Min Temperatura</label>
                                                        <input type="text" id="min_temperatura" name="min_temperatura" class="form-control{{ $errors->has('min_temperatura') ? ' is-invalid' : '' }}" value="{{ $cultivo->min_temperatura }}">
                                                        {!! $errors->first('min_temperatura', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="max_temperatura">Max Temperatura</label>
                                                        <input type="text" id="max_temperatura" name="max_temperatura" class="form-control{{ $errors->has('max_temperatura') ? ' is-invalid' : '' }}" value="{{ $cultivo->max_temperatura }}">
                                                        {!! $errors->first('max_temperatura', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="tiempo_crecimiento">Tiempo Crecimiento</label>
                                                        <input type="text" id="tiempo_crecimiento" name="tiempo_crecimiento" class="form-control{{ $errors->has('tiempo_crecimiento') ? ' is-invalid' : '' }}" value="{{ $cultivo->tiempo_crecimiento }}">
                                                        {!! $errors->first('tiempo_crecimiento', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="tiempo_vida">Tiempo Vida</label>
                                                        <input type="text" id="tiempo_vida" name="tiempo_vida" class="form-control{{ $errors->has('tiempo_vida') ? ' is-invalid' : '' }}" value="{{ $cultivo->tiempo_vida }}">
                                                        {!! $errors->first('tiempo_vida', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="tipo_sembrado">Tipo Sembrado</label>
                                                        <input type="text" id="tipo_sembrado" name="tipo_sembrado" class="form-control{{ $errors->has('tipo_sembrado') ? ' is-invalid' : '' }}" value="{{ $cultivo->tipo_sembrado }}">
                                                        {!! $errors->first('tipo_sembrado', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label class="form-label" for="imagen">Imagen</label>
                                                        <input type="text" id="imagen" name="imagen" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" value="{{ $cultivo->imagen }}">
                                                        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                    <div class="input-group input-group-outline mt-3">
                                                        <label for="tipo_cultivo_id"></label>
                                                        <select id="tipo_cultivo_id" name="tipo_cultivo_id" class="form-control{{ $errors->has('tipo_cultivo_id') ? ' is-invalid' : '' }}">
                                                            <option value="" disabled selected>Selecciona un tipo de cultivo</option>
                                                            @foreach ($tiposCultivos as $tipoCultivoId => $tipoCultivoNombre)
                                                                <option value="{{ $tipoCultivoId }}" {{ $tipoCultivoId == $cultivo->tipo_cultivo_id ? 'selected' : '' }}>
                                                                    {{ $tipoCultivoNombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        
                                                        {!! $errors->first('tipo_cultivo_id', '<div class="invalid-feedback">:message</div>') !!}
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
                          </div>
                      </div>
                  </div>
              </div>
      </section>
  </main>
</div>
</x-layout>
