
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
                    <a class="btn btn-info" href="{{ route('invernaderos.index') }}">{{ __('Regresar') }}</a>
                  </div>
                </div>

                <!-- Agregar la clase "table-responsive" para tablas en dispositivos móviles -->
                <div class="card-body">
                    <table class="table table-bordered table-striped text-center">
                      <tbody>
                        <tr>
                          <td><strong>Nombre:</strong></td>
                          <td>{{ $invernadero->nombre }}</td>
                        </tr>
                        <tr>
                          <td><strong>Longitud:</strong></td>
                          <td>{{ $invernadero->longitud }}</td>
                        </tr>
                        <tr>
                          <td><strong>Latitud:</strong></td>
                          <td>{{ $invernadero->latitud }}</td>
                        </tr>
                        <tr>
                          <td><strong>Ancho:</strong></td>
                          <td>{{ $invernadero->ancho }}</td>
                        </tr>
                        <tr>
                          <td><strong>Alto:</strong></td>
                          <td>{{ $invernadero->alto }}</td>
                        </tr>
                        <tr>
                          <td><strong>Largo:</strong></td>
                          <td>{{ $invernadero->largo }}</td>
                        </tr>
                        <tr>
                          <td><strong>Camas:</strong></td>
                          <td>
                            @if ($invernadero->camas->isEmpty())
                                No hay camas asociadas.
                            @else
                                @foreach ($invernadero->camas as $cama)
                                    @if ($cama->cultivos->isEmpty())
                                        {{ $cama->nombre }} - No hay cultivos asociados.
                                    @else
                                        @foreach ($cama->cultivos as $cultivo)
                                            {{ $cama->nombre }} - {{ $cultivo->nombre }}
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </td>
                        
                        </tr>
                        <tr>
                          <td><strong>Descripcion:</strong></td>
                          <td>{{ $invernadero->descripcion }}</td>
                        </tr>
                        <!-- Agregar más filas según sea necesario -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row justify-content-center mt-3">
                  <div class="col-xl-6 col-lg-8 col-md-8 col-12">
                      <div class="card z-index-2">
                          <div class="card-header p-3 pt-2">
                              <div class="text-center">
                                  <!-- Código del clima -->
                                  <div class="container mt-5">
                                      <div class="columns">
                                          <div class="column is-one-third">
                                              <div class="card">
                                                  <header class="card-header">
                                                      <p class="card-header-title"><h6>Clima Actual</h6></p>
                                                  </header>
                                                  <div class="card-content">
                                                      <div class="content">
                                                          <h2 class="subtitle is-5 has-text-secondary">Temperatura</h2>
                                                          <h2 class="is-size-6" id="temperature">Cargando...</h2>
                                                          <h2 class="subtitle is-5 has-text-secondary">Humedad</h2>
                                                          <h2 class="is-size-6" id="humidity">Cargando...</h2>
                                                          <p id="cityName">Ciudad: Maxcanu, Yucatan, Mexico</p>
                                                          <p id="cityLocation">Latitud: 20.5858, Longitud: -90.0024</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Fin del código del clima -->
                                  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                                  <script
                                      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

                                  <!-- Tu script de JavaScript para obtener datos de la API -->
                                  <script>
                                      let lastReadingTime = 0; // Variable para almacenar el tiempo de la última lectura

                                      // Función para obtener datos climáticos
                                      function getWeatherData() {
                                          // Actualizar el tiempo de la última lectura
                                          lastReadingTime = 0;

                                          // Realizar una solicitud usando fetch() para obtener la información del clima desde la API
                                          fetch(
                                                  "http://api.weatherunlocked.com/api/current/20.5858,-90.0024?app_id=eed041ed&app_key=f5aae82e8f0b31450a8c860832b43379")
                                              .then(response => response.json())
                                              .then(data => {
                                                  // Procesar los datos de respuesta y mostrarlos en el formato deseado
                                                  const temperature = data.temp_c;
                                                  const humidity = data.humid_pct;

                                                  document.getElementById("temperature").textContent = `Temperatura: ${temperature} °C`;
                                                  document.getElementById("humidity").textContent = `Humedad: ${humidity}%`;
                                              })
                                              .catch(error => {
                                                  console.error(error);
                                                  console.log("Error al cargar la información del clima");
                                                  document.getElementById("temperature").textContent = "Error al cargar la información del clima";
                                                  document.getElementById("humidity").textContent = "";
                                              });
                                      }


                                      getWeatherData();
                                  </script>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

 <script async
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdUaRCNxumu4pXK6aawvjmykUdkdNCdb4&callback=generarMapa">
                    </script>
                    <div class="container-fluid py-3">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-8 col-md-8 col-12">
                                <div class="card z-index-2">
                                    <div class="card-header p-3 pt-2">
                                        <div class="text-center">
                                            <div id="map" style="height:600px; width: 100%;"> </div>
                                            <script>
                                                function generarMapa() {
                                                    var ubicacion = {
                                                        lat: 20.587095,
                                                        lng: -90.004663
                                                    }; // Coordenadas de Nueva York
                                                    var mapa = new google.maps.Map(document.getElementById('map'), {
                                                        center: ubicacion,
                                                        zoom: 14 // Nivel de zoom
                                                    });
                                                    var marcador = new google.maps.Marker({
                                                        position: ubicacion,
                                                        map: mapa
                                                    });
                                                }
                                            </script>
                                        </div>
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
