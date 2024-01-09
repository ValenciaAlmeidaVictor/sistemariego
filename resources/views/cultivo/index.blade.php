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
                        @can('cultivos.index')
                        <div class="float-right">
                            <a href="{{ route('cultivos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                              {{ __('Agregar') }}
                            </a>
                          </div>
                          @endcan
                    </div>
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabla de Cultivos</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Min Humedad</th>
                                            <th>Max Humedad</th>
                                            <th>Min Luminosidad</th>
                                            <th>Max Luminosidad</th>
                                            <th>Min Temperatura</th>
                                            <th>Max Temperatura</th>
                                            <th>Tiempo Crecimiento</th>
                                            <th>Tiempo Vida</th>
                                            <th>Tipo Sembrado</th>
                                            <th>Imagen</th>
                                            <th>Tipo Cultivo Id</th>
    
                                            <th>Acciones</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cultivos as $cultivo)
                                            <tr>
                                                <td>{{ $cultivo->id  }}</td>
                                                
                                                <td>{{ $cultivo->nombre }}</td>
                                                <td>{{ $cultivo->descripcion }}</td>
                                                <td>{{ $cultivo->min_humedad }}</td>
                                                <td>{{ $cultivo->max_humedad }}</td>
                                                <td>{{ $cultivo->min_luminosidad }}</td>
                                                <td>{{ $cultivo->max_luminosidad }}</td>
                                                <td>{{ $cultivo->min_temperatura }}</td>
                                                <td>{{ $cultivo->max_temperatura }}</td>
                                                <td>{{ $cultivo->tiempo_crecimiento }}</td>
                                                <td>{{ $cultivo->tiempo_vida }}</td>
                                                <td>{{ $cultivo->tipo_sembrado }}</td>
                                                <td>{{ $cultivo->imagen }}</td>
                                                <td>{{ $cultivo->tiposCultivo->tipo }}</td>
    
                                                <td>
                                                    @can('cultivos.show')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cultivos.show',$cultivo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    @endcan 
                                                </td>
                                                <td>
                                                    @can('cultivos.edit')   
                                                    <a class="btn btn-sm btn-warning" href="{{ route('cultivos.edit',$cultivo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @endcan
                                                </td>
                                                <td>
                                                    @can('cultivos.destroy')  
                                                    <form action="{{ route('cultivos.destroy',$cultivo->id) }}" method="POST">
                                                        
                                                    @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return showConfirmation()"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    </form>
                                                <script>
                                                    function showConfirmation() {
                                                     return confirm('¿Estás seguro de que deseas eliminar este registro?');
                                                                                }
                                               </script>
                                               @endcan
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
