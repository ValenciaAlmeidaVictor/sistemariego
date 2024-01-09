
<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernadero"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Lista Invernadero"></x-navbars.navs.auth>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

        <main class="main-content mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Vista de Sensores</h4>
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-info" href="{{ route('sensores.index') }}">{{ __('Regresar') }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped text-center">
                                <tr>
                                    <th>Nombre</th>
                                    <td>{{ $sensore->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Numero Serie</th>
                                    <td>{{ $sensore->numero_serie }}</td>
                                </tr>
                                <tr>
                                    <th>Modelo</th>
                                    <td>{{ $sensore->modelo }}</td>
                                </tr>
                                <tr>
                                    <th>Descripcion</th>
                                    <td>{{ $sensore->descripcion }}</td>
                                </tr>
                                <tr>
                                    <th>Topic</th>
                                    <td>{{ $sensore->topic }}</td>
                                </tr>
                                <tr>
                                    <th>Tipo Sensor Id</th>
                                    <td>{{ $sensore->tipoSensore->tipo}}</td>
                                </tr>
                                <tr>
                                    <th>Estado Id</th>
                                    <td>{{ $sensore->estado->estado  }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </main>
</x-layout>