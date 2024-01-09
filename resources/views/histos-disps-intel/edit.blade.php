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
                                  <h4 class="font-weight-bolder">Registro de Historial-Dispositivo</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('histos-disps-intels.update',$histosDispsIntel->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="box-body">
                                        <div class="input-group input-group-outline mt-3">
                                            <label for="fecha_inicio"></label>
                                            <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $histosDispsIntel->fecha_inicio }}" class="form-control{{ $errors->has('fecha_inicio') ? ' is-invalid' : '' }}" placeholder="Fecha Inicio">
                                            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label for="hora"></label>
                                            <input type="time" name="hora" id="hora" value="{{ $histosDispsIntel->hora }}" class="form-control{{ $errors->has('hora') ? ' is-invalid' : '' }}" placeholder="Hora">
                                            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label for="valor"></label>
                                            <input type="text" name="valor" id="valor" value="{{ $histosDispsIntel->valor }}" class="form-control{{ $errors->has('valor') ? ' is-invalid' : '' }}" placeholder="Valor">
                                            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        <div class="input-group input-group-outline mt-3">
                                            <label for="disp_intel_id"></label>
                                            <select name="disp_intel_id" id="disp_intel_id" class="form-control{{ $errors->has('disp_intel_id') ? ' is-invalid' : '' }}" placeholder="Disp Intel Id">
                                                <option value="">Selecciona un Dispositivo</option>
                                                @foreach($dispsIntels as $dispsIntelId => $dispsIntelName)
                                                    <option value="{{ $dispsIntelId }}" {{ $histosDispsIntel->disp_intel_id == $dispsIntelId ? 'selected' : '' }}>
                                                        {{ $dispsIntelName }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            {!! $errors->first('disp_intel_id', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <br>
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                                    </div>
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-info">{{ __('Cerrar') }}</button>
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
