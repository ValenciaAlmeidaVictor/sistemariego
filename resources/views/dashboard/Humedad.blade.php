<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Tabla Sensores"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        
        <x-navbars.navs.auth titlePage="Estado del Clima"></x-navbars.navs.auth>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
        <!-- End Navbar -->
        <html>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Sensor de temperatura - By Parzibyte</title>
            <link rel='stylesheet' href='https://unpkg.com/bulma@0.9.1/css/bulma.min.css'>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        </head>
        <body>
            <div class="container">
                <div class="columns has-text-centered">
                    <div class="column">
                        <div>
                            <h1 class="title is-2">Termómetro</h1>
                            <i class="fa fa-thermometer-half" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column has-text-centered">
                        <div>
                            <h2 class="subtitle is-4 has-text-primary">Temperatura</h2>
                            <h2 class="is-size-1" id="temperature">Cargando...</h2>
                        </div>
                    </div>
                    <div class="column has-text-centered">
                        <div>
                            <h2 class="subtitle is-4 has-text-primary">Humedad</h2>
                            <h2 class="is-size-1" id="humidity">Cargando...</h2>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div>
                            <h2 id="lastReading" style="color: black;">Última lectura: Hace <strong class="is-size-1" >0</strong> segundo(s)</h2>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column has-text-centered">
                        <div>
                            <input type="text" id="cityInput" placeholder="Escribe el nombre de la ciudad" style="width: 300px; height: 40px;">
                            <button class="button is-link" onclick="getWeatherDataByCity()">Buscar</button>
                        </div>
                    </div>
                    
                </div>
                <div class="columns">
                    <div class="column has-text-centered">
                        <div>
                            <h2 class="subtitle is-4" id="cityName"></h2>
                            <p id="cityLocation"></p>
                        </div>
                    </div>
                </div>
            </div>
        
            <script>
                let lastReadingTime = 0; // Variable para almacenar el tiempo de la última lectura
        
                function getWeatherDataByCity() {
                    const city = document.getElementById("cityInput").value;
        
                    // Actualizar el tiempo de la última lectura
                    lastReadingTime = 0;
        
                    // Realizar una solicitud usando fetch() para obtener la información del clima de la ciudad
                    fetch("https://api.openweathermap.org/data/2.5/weather?q=" + city + "&appid=ddfa71bccb894fb51eb436a61f9ea444")
                        .then(response => response.json())
                        .then(data => {
                            const temperature = data.main.temp;
                            const humidity = data.main.humidity;
                            const cityName = data.name;
                            const country = data.sys.country;
                            const lat = data.coord.lat;
                            const lon = data.coord.lon;
        
                            // La temperatura se proporciona en kelvin, así que conviértela a Celsius
                            const temperatureCelsius = (temperature - 273.15).toFixed(2);
        
                            document.getElementById("temperature").textContent = temperatureCelsius + " °C";
                            document.getElementById("humidity").textContent = humidity + "%";
                            document.getElementById("cityName").textContent = "Ciudad: " + cityName + ", " + country;
                            document.getElementById("cityLocation").textContent = "Latitud: " + lat + ", Longitud: " + lon;
                        })
                        .catch(error => {
                            console.error(error);
                            console.log("Error al cargar la información del clima");
                            document.getElementById("temperature").textContent = "Error al cargar la información del clima";
                            document.getElementById("humidity").textContent = "";
                            document.getElementById("cityName").textContent = "";
                            document.getElementById("cityLocation").textContent = "";
                        });
                }
        
                                // Función para actualizar el tiempo de la última lectura cada segundo
                function updateLastReadingTime() {
                    lastReadingTime++;
                    document.getElementById("lastReading").innerHTML = "Última lectura: Hace <strong class='has-text-black'>" + lastReadingTime + "</strong> segundo(s)";
                    setTimeout(updateLastReadingTime, 1000); // Actualizar cada segundo
                }

                // Iniciar la actualización del tiempo de la última lectura
                updateLastReadingTime();
            </script>
        </body>
        </html>
    </main>
    <x-plugins></x-plugins>

</x-layout>

