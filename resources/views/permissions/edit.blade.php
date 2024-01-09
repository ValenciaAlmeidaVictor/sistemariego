<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernadero"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.auth titlePage="Lista Invernadero"></x-navbars.navs.auth>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
        <main class="main-content mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Editar Registro de Permiso</h4>
                                    <p class="mb-0">Rellene el Registro</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('permissions.update',$permission->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label" for="name"></label>
                                            <input type="text" name="name" id="name" value="{{ $permission->name }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="">
                                            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label" for="description"></label>
                                            <input type="text" name="description" id="description" value="{{ $permission->description }}" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">
                                            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        
                                        

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                        <div class="box-footer mt20">
                                            <button type="submit" class="btn btn-info">{{ __('Cerrar') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </main>
</x-layout>
