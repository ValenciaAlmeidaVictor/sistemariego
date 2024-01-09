

<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernadero"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Lista Invernadero"></x-navbars.navs.auth>
        <style>
            /* Estilos para el contenedor del campo */
            .form-group {
                display: flex;
                flex-direction: column;
                margin-top: 10px;
            }
        
            /* Estilos para el título del campo */
            .form-group label {
                margin-bottom: 5px; /* Espacio entre el título y el campo */
            }
        </style>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

  <main class="main-content  mt-0">
      <section>
          <div class="page-header min-vh-100">
              <div class="container">
                  <div class="row">
                          <div class="card card-plain">
                              <div class="card-header">
                                  <h4 class="font-weight-bolder">Registro de Cultivo</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('cultivos-camas.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="box box-info padding-1">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="fecha_siembra">Fecha Siembra</label>
                                                <div class="input-group input-group-outline">
                                                <input type="date" name="fecha_siembra" value="{{ $cultivosCama->fecha_siembra }}" class="form-control{{ $errors->has('fecha_siembra') ? ' is-invalid' : '' }}" placeholder="Fecha Siembra" id="fecha_siembra">
                                            </div>
                                                {!! $errors->first('fecha_siembra', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha_cosecha">Fecha Cosecha</label>
                                                <div class="input-group input-group-outline">
                                                    <input type="date" name="fecha_cosecha" value="{{ $cultivosCama->fecha_cosecha }}" class="form-control{{ $errors->has('fecha_cosecha') ? ' is-invalid' : '' }}" placeholder="Fecha Cosecha" id="fecha_cosecha">
                                                </div>
                                                {!! $errors->first('fecha_cosecha', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="input-group input-group-outline mt-3">
                                                <label for="ubicacion_cama"></label>
                                                <input type="text" name="ubicacion_cama" value="{{ $cultivosCama->ubicacion_cama }}" class="form-control{{ $errors->has('ubicacion_cama') ? ' is-invalid' : '' }}" placeholder="Ubicacion Cama" id="ubicacion_cama">
                                                {!! $errors->first('ubicacion_cama', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="form-group">
                                                <label for="cultivo_id"></label>
                                                <select name="cultivo_id" class="form-control{{ $errors->has('cultivo_id') ? ' is-invalid' : '' }}" id="cultivo_id">
                                                    <option value="">Seleccionar Cultivo</option>
                                                    @foreach($cultivos as $cultivoId => $cultivoNombre)
                                                        <option value="{{ $cultivoId }}"{{ $cultivoId == $cultivosCama->cultivo_id ? ' selected' : '' }}>{{ $cultivoNombre }}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('cultivo_id', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                            <div class="form-group">
                                                <label for="cama_id"> </label>
                                                <select name="cama_id" class="form-control{{ $errors->has('cama_id') ? ' is-invalid' : '' }}" id="cama_id">
                                                    <option value="">Seleccionar Cama</option>
                                                    @foreach($camas as $camaId => $camaNombre)
                                                        <option value="{{ $camaId }}"{{ $camaId == $cultivosCama->cama_id ? ' selected' : '' }}>{{ $camaNombre }}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('cama_id', '<div class="invalid-feedback">:message</div>') !!}
                                            </div>
                                        </div>
                                        <div class="box-footer mt20">
                                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                                        </div>
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
