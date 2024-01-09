
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
                    <h4 class="font-weight-bolder">Vista de Invernaderos</h4>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-info" href="{{ route('tipos-disps-intels.index') }}">{{ __('Regresar') }}</a>
                  </div>
                </div>

                <!-- Agregar la clase "table-responsive" para tablas en dispositivos móviles -->
                <div class="card-body">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <th>Tipo:</th>
                            <td>{{ $tiposDispsIntel->tipo }}</td>
                        </tr>
                          <td><strong>Dispositivo:</strong></td>
                          <td>
                            @if ($tiposDispsIntel->dispsIntels->isEmpty())
                                No hay Dispositivos asociados.
                            @else
                                @foreach ($tiposDispsIntel->dispsIntels as $dispsIntel)
                                    {{ $dispsIntel->nombre }}<br>
                                @endforeach
                            @endif
                        </td>
                      </tbody>
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
