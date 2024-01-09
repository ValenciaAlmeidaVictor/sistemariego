<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernadero"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Lista Invernadero"></x-navbars.navs.auth>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="font-weight-bolder">Editar Registro de Invernaderos</h4>
                                <p class="mb-0">Edite el Registro</p>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('invernaderos.update', $invernadero->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="form-label" for="nombre"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="nombre" id="nombre" value="{{ $invernadero->nombre }}" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="longitud"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="longitud" id="longitud" value="{{ $invernadero->longitud }}" class="form-control{{ $errors->has('longitud') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('longitud', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="latitud"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="latitud" id="latitud" value="{{ $invernadero->latitud }}" class="form-control{{ $errors->has('latitud') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('latitud', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="ancho"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="ancho" id="ancho" value="{{ $invernadero->ancho }}" class="form-control{{ $errors->has('ancho') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('ancho', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="alto"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="alto" id="alto" value="{{ $invernadero->alto }}" class="form-control{{ $errors->has('alto') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('alto', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="largo"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="largo" id="largo" value="{{ $invernadero->largo }}" class="form-control{{ $errors->has('largo') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('largo', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="descripcion"></label>
                                        <div class="input-group input-group-outline mt-3">
                                        <input type="text" name="descripcion" id="descripcion" value="{{ $invernadero->descripcion }}" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}">
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
