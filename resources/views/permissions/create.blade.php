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
                                    <h4 class="font-weight-bolder">Crear Nuevo Permiso</h4>
                                    <p class="mb-0">Rellene el Registro</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('permissions.store') }}">
                                        @csrf
                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label" for="name">Nombre del Permiso</label>
                                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="">
                                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        
                                        

                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label" for="description">Descripción del Permiso</label>
                                            <input type="text" name="description" id="description" value="{{old('description')}}" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"></textarea>
                                            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
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
