
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
                        @can('permissions.create')
                        <div class="float-right">
                            <a href="{{ route('permissions.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                              {{ __('Agregar Permiso') }}
                            </a>
                          </div>
                          @endcan
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabla de Permisos</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>

                                            <th>Nombre</th>

                                            <th>Descripción</th>

                                            <th>Acciones</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <td>{{ $permission->id }}</td>

                                                    <td>{{ $permission->name }}</td>

                                                    <td>{{ $permission->description }}</td>


                                                <td>
                                                    @can('permissions.edit')
                                                      <a class="btn btn-sm btn-warning" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @endcan
                                                </td>
                                                <td>
                                                    
                                                    @can('permissions.destroy')
                                                    <form action="{{ route('permissions.destroy',$permission->id) }}" method="POST">  
                                                      
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
                        <div class="card-footer d-flex justify-content-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{-- Anterior --}}
                                    @if($permissions->currentPage() > 1)
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $permissions->previousPageUrl() }}" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    @endif
                        
                                    {{-- Páginas --}}
                                    @for ($i = 1; $i <= $permissions->lastPage(); $i++)
                                        <li class="page-item {{ $permissions->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $permissions->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                        
                                    {{-- Siguiente --}}
                                    @if($permissions->currentPage() < $permissions->lastPage())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $permissions->nextPageUrl() }}" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
