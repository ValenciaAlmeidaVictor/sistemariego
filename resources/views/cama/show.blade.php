
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
                                    <h4 class="font-weight-bolder">Vista de Camas</h4>
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-info" href="{{ route('camas.index') }}">{{ __('Regresar') }}</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered table-striped text-center">
                                    <tr>
                                        <td><strong>Nombre:</strong></td>
                                        <td>{{ $cama->nombre }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Largo:</strong></td>
                                        <td>{{ $cama->largo }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ancho:</strong></td>
                                        <td>{{ $cama->ancho }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Invernadero al que pertenece:</strong></td>
                                        <td>{{ $cama->invernadero->nombre }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </main>
</x-layout>
