<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <!DOCTYPE html>
<html>
<head>
  <title>Switch Button Example</title>
  <style>
    .switch-button {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      margin: auto;
      height: 55px;
    }
    
    .switch-button .switch-outer {
      height: 100%;
      background: #252532;
      width: 115px;
      border-radius: 165px;
      -webkit-box-shadow: inset 0px 5px 10px 0px #16151c, 0px 3px 6px -2px #403f4e;
      box-shadow: inset 0px 5px 10px 0px #16151c, 0px 3px 6px -2px #403f4e;
      border: 1px solid #32303e;
      padding: 6px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      cursor: pointer;
      -webkit-tap-highlight-color: transparent;
    }
    
    .switch-button .switch-outer input[type="checkbox"] {
      opacity: 0;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      position: absolute;
    }
    
    .switch-button .switch-outer .button-toggle {
      height: 42px;
      width: 42px;
      background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(#3b3a4e),
        to(#272733)
      );
      background: -o-linear-gradient(#3b3a4e, #272733);
      background: linear-gradient(#3b3a4e, #272733);
      border-radius: 100%;
      -webkit-box-shadow: inset 0px 5px 4px 0px #424151, 0px 4px 15px 0px #0f0e17;
      box-shadow: inset 0px 5px 4px 0px #424151, 0px 4px 15px 0px #0f0e17;
      position: relative;
      z-index: 2;
      -webkit-transition: left 0.3s ease-in;
      -o-transition: left 0.3s ease-in;
      transition: left 0.3s ease-in;
      left: 0;
    }
    
    .switch-button .switch-outer input[type="checkbox"]:checked + .button .button-toggle {
      left: 58%;
    }
    
    .switch-button .switch-outer input[type="checkbox"]:checked + .button .button-indicator {
      -webkit-animation: indicator 1s forwards;
      animation: indicator 1s forwards;
    }
    
    .switch-button .switch-outer .button {
      width: 100%;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      position: relative;
      -webkit-box-pack: justify;
      justify-content: space-between;
    }
    
    .switch-button .switch-outer .button-indicator {
      height: 25px;
      width: 25px;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      border-radius: 50%;
      border: 3px solid #ef565f;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      right: 10px;
      position: relative;
    }
    
    @-webkit-keyframes indicator {
      30% {
        opacity: 0;
      }
    
      0% {
        opacity: 1;
      }
    
      100% {
        opacity: 1;
        border: 3px solid #60d480;
        left: -68%;
      }
    }
    
    @keyframes indicator {
      30% {
        opacity: 0;
      }
    
      0% {
        opacity: 1;
      }
    
      100% {
        opacity: 1;
        border: 3px solid #60d480;
        left: -68%;
      }
    }
  </style>
</head>
</html>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                                <label class="switch-button" for="switch">
                                    <div class="switch-outer">
                                        <input id="switch" type="checkbox" onchange="toggleSwitch()">
                                        <div class="button">
                                            <span class="button-toggle"></span>
                                            <span class="button-indicator"></span>
                                        </div>
                                    </div>
                                </label>
                                <div>
                                    <img id="image" src="imagen-apagada.png">
                                </div>
                            
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/mqtt/4.2.7/mqtt.min.js"></script>
                                <script>
                                    function toggleSwitch() {
                                        const switchElement = document.getElementById('switch');
                                        if (switchElement.checked) {
                                            prender();
                                            document.getElementById('image').src = 'imagen-encendida.png'; // Update image for ON state
                                        } else {
                                            apagar();
                                            document.getElementById('image').src = 'imagen-apagada.png'; // Update image for OFF state
                                        }
                                    }
                            
                                    function prender() {
                                        // Create a client instance for prender function
                                        const clientId = 'mqttx_eb5cefaf' + Math.random().toString(16).substr(2, 8);
                            
                                        const host = 'ws://broker.emqx.io:8083/mqtt';
                            
                                        const options = {
                                            keepalive: 60,
                                            clientId: clientId,
                                            protocolId: 'MQTT',
                                            protocolVersion: 4,
                                            clean: true,
                                            reconnectPeriod: 1000,
                                            connectTimeout: 30 * 1000,
                                            will: {
                                                topic: 'topico-mqtt',
                                                payload: 'Connection Closed abnormally..!',
                                                qos: 0,
                                                retain: false
                                            },
                                        };
                            
                                        console.log('Connecting mqtt client');
                                        const client = mqtt.connect(host, options);
                            
                                        client.on('error', (err) => {
                                            console.log('Connection error: ', err);
                                            client.end();
                                        });
                            
                                        client.on('reconnect', () => {
                                            console.log('Reconnecting...');
                                        });
                            
                                        client.on('connect', () => {
                                            console.log('Client connected:' + clientId);
                                            // Subscribe
                                            client.subscribe('sistemaderiego', { qos: 0 });
                                        });
                            
                                        // Publish
                                        client.publish('sistemaderiego', '1', { qos: 0, retain: false });
                                        // Received
                                        client.on('message', (topic, message, packet) => {
                                            console.log('Received Message: ' + message.toString() + '\nOn topic: ' + topic);
                                        });
                                    }
                            
                                    function apagar() {
                                        // Create a client instance for apagar function
                                        const clientId = 'mqttx_eb5cefaf' + Math.random().toString(16).substr(2, 8);
                            
                                        const host = 'ws://broker.emqx.io:8083/mqtt';
                            
                                        const options = {
                                            keepalive: 60,
                                            clientId: clientId,
                                            protocolId: 'MQTT',
                                            protocolVersion: 4,
                                            clean: true,
                                            reconnectPeriod: 1000,
                                            connectTimeout: 30 * 1000,
                                            will: {
                                                topic: 'topico-mqtt',
                                                payload: 'Connection Closed abnormally..!',
                                                qos: 0,
                                                retain: false
                                            },
                                        };
                            
                                        console.log('Connecting mqtt client');
                                        const client = mqtt.connect(host, options);
                            
                                        client.on('error', (err) => {
                                            console.log('Connection error: ', err);
                                            client.end();
                                        });
                            
                                        client.on('reconnect', () => {
                                            console.log('Reconnecting...');
                                        });
                            
                                        client.on('connect', () => {
                                            console.log('Client connected:' + clientId);
                                            // Subscribe
                                            client.subscribe('sistemaderiego', { qos: 0 });
                                        });
                            
                                        // Publish
                                        client.publish('sistemaderiego', '0', { qos: 0, retain: false });
                                        // Received
                                        client.on('message', (topic, message, packet) => {
                                            console.log('Received Message: ' + message.toString() + '\nOn topic: ' + topic);
                                        });
                                    }
                                </script>
                                <script type="text/javascript">
                                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                                    (function(){
                                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                                    s1.async=true;
                                    s1.src='https://embed.tawk.to/65512813958be55aeaaee759/1hf2g93u7';
                                    s1.charset='UTF-8';
                                    s1.setAttribute('crossorigin','*');
                                    s0.parentNode.insertBefore(s1,s0);
                                    })();
                                    </script>

                            <div class="text-end pt-1">
                            </div>
                        </div>
                    </div>
                </div>
                

<div class="container-fluid py-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                            <div class="card z-index-2">
                                <div class="card-header p-3 pt-2">
                                    <div class="text-center">


                                        <div id="player" class="video-frame">
                                        </div>

                                        <script>
                                            // Inicializa el reproductor de YouTube
                                            var player;

                                            function onYouTubeIframeAPIReady() {
                                                player = new YT.Player('player', {
                                                    height: '560',
                                                    width: '1100',
                                                    videoId: '-R_hrfpp6Xc',
                                                });
                                            }
                                        </script>
                                        <script src="https://www.youtube.com/iframe_api"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    // Realiza una solicitud GET a la API de YouTube Data
                    fetch(
                            'https://www.googleapis.com/youtube/v3/search?key=AIzaSyAUgj8du6DkZFG7M03_TZZ5aaeIU9s6Cko&part=snippet&q=Terminator'
                        )
                        .then(response => response.json())
                        .then(data => {
                            // Procesa los resultados de la búsqueda
                            const videos = data.items;
                            videos.forEach(video => {
                                const title = video.snippet.title;
                                const videoId = video.id.videoId;
                                // Agrega los resultados a tu sitio web
                                console.log(`${title}: https://www.youtube.com/watch?v=${-R_hrfpp6Xc}`);
                            });
                        })
                        .catch(error => {
                            console.error('Error al buscar videos: ', error);
                        });
                </script>



                <style>
                    .video-frame {
                        border: 5px solid #007BFF;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                        padding: 20px;
                        background-color: #f5f5f5;
                        text-align: center;
                    }

                    .video-frame iframe {
                        width: 100%;
                        height: 100%;
                        border: none;
                    }
                </style>

            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Ahorro por dia</h6>
                            <p class="text-sm ">Registro por dia  </p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm"> Hace dos dias</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Reporte Diario</h6>
                            <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>)Incremento del dia</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm">Actualizado hace 4 minutos </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mb-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Registro Anual</h6>
                            <p class="text-sm ">un incremento en el ahorro</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm">Justo ahora</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [50, 20, 10, 22, 50, 10, 40],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65512813958be55aeaaee759/1hf2g93u7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    @endpush
</x-layout>
