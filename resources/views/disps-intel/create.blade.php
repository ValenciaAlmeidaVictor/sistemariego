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
                                  <h4 class="font-weight-bolder">Registro de Tipos-Cultivos</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('disps-intels.store') }}">
                                    @csrf
                                    <div class="input-group input-group-outline mt-3">
                                        <label for="nombre"></label>
                                        <input type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="nombre" name="nombre" value="{{ $dispsIntel->nombre }}" placeholder="Nombre">
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                      
                                      <div class="input-group input-group-outline mt-3">
                                        <label for="modelo"></label>
                                        <input type="text" class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}" id="modelo" name="modelo" value="{{ $dispsIntel->modelo }}" placeholder="Modelo">
                                        {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                      
                                      <div class="input-group input-group-outline mt-3">
                                        <label for="descripcion"></label>
                                        <input type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" id="descripcion" name="descripcion" value="{{ $dispsIntel->descripcion }}" placeholder="Descripcion">
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                      
                                      <div class="input-group input-group-outline mt-3">
                                        <label for="alcance"></label>
                                        <input type="text" class="form-control{{ $errors->has('alcance') ? ' is-invalid' : '' }}" id="alcance" name="alcance" value="{{ $dispsIntel->alcance }}" placeholder="Alcance">
                                        {!! $errors->first('alcance', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                      
                                      <div class="input-group input-group-outline mt-3">
                                        <label for="topic"></label>
                                        <input type="text" class="form-control{{ $errors->has('topic') ? ' is-invalid' : '' }}" id="topic" name="topic" value="{{ $dispsIntel->topic }}" placeholder="Topic">
                                        {!! $errors->first('topic', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                      
                                      <div class="input-group input-group-outline mt-3">
                                        <label for="tipo_disp_intel_id"></label>
                                        <select class="form-control{{ $errors->has('tipo_disp_intel_id') ? ' is-invalid' : '' }}" id="tipo_disp_intel_id" name="tipo_disp_intel_id">
                                          <option value="">Seleccione un Tipo Disp Intel</option>
                                          @foreach($tiposDispsIntels as $key => $tipoDispIntel)
                                            <option value="{{ $key }}" {{ $dispsIntel->tipo_disp_intel_id == $key ? 'selected' : '' }}>{{ $tipoDispIntel }}</option>
                                          @endforeach
                                        </select>
                                        {!! $errors->first('tipo_disp_intel_id', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                      
                                      <div class="input-group input-group-outline mt-3">
                                        <label for="cama_id"></label>
                                        <select class="form-control{{ $errors->has('cama_id') ? ' is-invalid' : '' }}" id="cama_id" name="cama_id">
                                          <option value="">Seleccione una Cama</option>
                                          @foreach($camas as $key => $cama)
                                            <option value="{{ $key }}" {{ $dispsIntel->cama_id == $key ? 'selected' : '' }}>{{ $cama }}</option>
                                          @endforeach
                                        </select>
                                        {!! $errors->first('cama_id', '<div class="invalid-feedback">:message</div>') !!}
                                      </div>
                                      
                                      <div class="input-group input-group-outline mt-3">
                                        <label for="estado_id"></label>
                                        <select class="form-control{{ $errors->has('estado_id') ? ' is-invalid' : '' }}" id="estado_id" name="estado_id">
                                          <option value="">Seleccione un Estado</option>
                                          @foreach($estados as $key => $estado)
                                            <option value="{{ $key }}" {{ $dispsIntel->estado_id == $key ? 'selected' : '' }}>{{ $estado }}</option>
                                          @endforeach
                                        </select>
                                        {!! $errors->first('estado_id', '<div class="invalid-feedback">:message</div>') !!}
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
