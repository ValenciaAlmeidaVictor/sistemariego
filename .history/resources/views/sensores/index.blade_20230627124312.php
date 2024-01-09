@yield('posts')

<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernadero"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Lista Invernadero"></x-navbars.navs.auth>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{route('Sensores.create')}}" class="btn btn-success btn"><i class="fa-solid fa-circle-plus"></i></a>
                            <a href="{{route('Sensores.index')}}"><button type="button" class="btn btn-info">Refrescar</button></a>
                        </div>
                    </div>
                    <br>
                    <br><!--CODIGO PARA EL BUSCADOR-->
                        <br>
                        <br>
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabla de Tipos Plantas</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>TIPO DE SENSOR</th>
                                            <th>COSTO</th>
                                            <th>CANTIDAD</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Sensores as $Sensor)
                                    <tr>
                                        <td>{{$Sensor->id}}</td>
                                        <td>{{$Sensor->nombre}}</td>
                                        <td>{{$Sensor->tipoSensor}}</td>
                                        <td>{{$Sensor->costo}}</td>
                                        <td>{{$Sensor->cantidad}}</td>
                                        <td>
                                            <form action="{{route('Sensores.destroy',$sensor->id)}}" method="post">
                                                <a href="{{route('Sensores.edit',$sensor->id)}}" class="btn btn-warning btn"><i class="fa-regular fa-pen-to-square"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn" type="submit"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
