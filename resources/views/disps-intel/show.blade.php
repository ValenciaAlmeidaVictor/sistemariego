
<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernadero"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <x-navbars.navs.auth titlePage="Lista Invernadero"></x-navbars.navs.auth>
      <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      </head>
      <body>
      <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

      <main class="main-content mt-0">
        <section>
          <div class="page-header min-vh-100">
            <div class="container">
              <div class="row">
                <div class="card card-plain">
                  <div class="card-header">
                    <h4 class="font-weight-bolder">Vista de Dispositivos Inteligentes</h4>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-info" href="{{ route('disps-intels.index') }}">{{ __('Regresar') }}</a>
                  </div>
                </div>

                <!-- Agregar la clase "table-responsive" para tablas en dispositivos móviles -->
                <div class="card-body">
                    <table class="table table-bordered table-striped text-center">
                                <tr>
                                    <th>Nombre:</th>
                                    <td>{{ $dispsIntel->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Modelo:</th>
                                    <td>{{ $dispsIntel->modelo }}</td>
                                </tr>
                                <tr>
                                    <th>Descripción:</th>
                                    <td>{{ $dispsIntel->descripcion }}</td>
                                </tr>
                                <tr>
                                    <th>Alcance:</th>
                                    <td>{{ $dispsIntel->alcance }}</td>
                                </tr>
                                <tr>
                                    <th>Topic:</th>
                                    <td>{{ $dispsIntel->topic }}</td>
                                </tr>
                                <tr>
                                    <th>Tipo Disp Intel Id:</th>
                                    <td>{{ $dispsIntel->tiposDispsIntel->tipo}}</td>
                                </tr>
                                <tr>
                                    <th>Cama Id:</th>
                                    <td>{{ $dispsIntel->cama->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Estado Id:</th>
                                    <td>{{ $dispsIntel->estado->estado }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </main>
    </main>
</x-layout>
</body>
