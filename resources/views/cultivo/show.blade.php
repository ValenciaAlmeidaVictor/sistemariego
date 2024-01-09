
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
                    <h4 class="font-weight-bolder">Vista de Cultivos</h4>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-info" href="{{ route('cultivos.index') }}">{{ __('Regresar') }}</a>
                  </div>
                </div>

                <!-- Agregar la clase "table-responsive" para tablas en dispositivos móviles -->
                <div class="card-body">
                    <table class="table table-bordered table-striped text-center">
                                <tr>
                                    <th>Nombre</th>
                                    <td>{{ $cultivo->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Descripcion</th>
                                    <td>{{ $cultivo->descripcion }}</td>
                                </tr>
                                <tr>
                                    <th>Min Humedad</th>
                                    <td>{{ $cultivo->min_humedad }}</td>
                                </tr>
                                <tr>
                                    <th>Max Humedad</th>
                                    <td>{{ $cultivo->max_humedad }}</td>
                                </tr>
                                <tr>
                                    <th>Min Luminosidad</th>
                                    <td>{{ $cultivo->min_luminosidad }}</td>
                                </tr>
                                <tr>
                                    <th>Max Luminosidad</th>
                                    <td>{{ $cultivo->max_luminosidad }}</td>
                                </tr>
                                <tr>
                                    <th>Min Temperatura</th>
                                    <td>{{ $cultivo->min_temperatura }}</td>
                                </tr>
                                <tr>
                                    <th>Max Temperatura</th>
                                    <td>{{ $cultivo->max_temperatura }}</td>
                                </tr>
                                <tr>
                                    <th>Tiempo Crecimiento</th>
                                    <td>{{ $cultivo->tiempo_crecimiento }}</td>
                                </tr>
                                <tr>
                                    <th>Tiempo Vida</th>
                                    <td>{{ $cultivo->tiempo_vida }}</td>
                                </tr>
                                <tr>
                                    <th>Tipo Sembrado</th>
                                    <td>{{ $cultivo->tipo_sembrado }}</td>
                                </tr>
                                <tr>
                                    <th>Imagen</th>
                                    <td>{{ $cultivo->imagen }}</td>
                                </tr>
                                <tr>
                                    <th>Tipo de Cultivo al que pertenece</th>
                                    <td>{{ $cultivo->tiposCultivo->tipo }}</td>
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
