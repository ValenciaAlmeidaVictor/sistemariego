
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
                                  <h4 class="font-weight-bolder">Crear Nuevo Rol</h4>
                                  <p class="mb-0">Rellene el Registro</p>
                              </div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('roles.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre del Rol</label>
                                        <div class="input-group input-group-outline mt-3">
                                            <input type="text" name="name" id="name"
                                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                value="{{ old('name') }}" placeholder="Nombre del Rol">
                                            @if ($errors->has('name'))
                                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <h2>Listado de Permisos</h2>
                                        @foreach ($permissions as $permission)
                                            <div class="form-check">
                                                <input type="checkbox" name="permissions[]" id="permiso_{{ $permission->id }}" value="{{ $permission->id }}">
                                                <label for="permiso_{{ $permission->id }}">
                                                    {{ $permission->description }}
                                                </label>
                                            </div>
                                        @endforeach
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
