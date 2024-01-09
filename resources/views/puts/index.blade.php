
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Tabla Sensores"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tabla de Sensores"></x-navbars.navs.auth>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="{{route('puts.create')}}" class="btn btn-success btn"><i>Agregar</i></a>
                            <a href="{{route('puts.index')}}"><button type="button" class="btn btn-info">Refrescar</button></a>
                        </div>
                    </div>
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Dispositivos</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>DESCRIPCION</th>
                                            <th>MODELO</th>
                                            <th>ALCANCE</th>
                                            <th>TIPO DE DISPOSITIVO</th>
                                            <th>HISTORIAL DE DISPOSITIVO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($puts as $puts)
                                    <tr>
                                        <td>{{$puts->id}}</td>
                                        <td>{{$puts->nombre}}</td>
                                        <td>{{$puts->descripcion}}</td>
                                        <td>{{$puts->modelo}}</td>
                                        <td>{{$puts->alcance}}</td>
                                        <td>{{$puts->tipoDispositivo}}</td>
                                        <td>{{$puts->historialDispositivo}}</td>
                                        <td>
                                            <form action="{{route('puts.destroy',$puts->id)}}" method="post">
                                                <a href="{{route('puts.edit',$puts->id)}}" class="btn btn-warning btn"><i class="fa-regular fa-pen-to-square"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn" type="submit" onclick="return showConfirmation()"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                            <script>
                                                function showConfirmation() {
                                                 return confirm('¿Estás seguro de que deseas eliminar este registro?');
                                                                            }
                                           </script>
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
