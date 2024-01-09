
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Lista Invernaderos"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        
        <x-navbars.navs.auth titlePage="Lista Invernaderos"></x-navbars.navs.auth>
        <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @can('roles.create')
                        <div class="float-right">
                            <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                              {{ __('Agregar Rol') }}
                            </a>
                          </div>
                          @endcan
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabla de Roles</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            
                                            <th>Rol</th>

                                            <th>Acciones</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $role->id}}</td>
                                                
                                                <td>{{ $role->name }}</td>


                                                <td>
                                                   
                                                        @can('roles.edit')
                                                        <a class="btn btn-sm btn-warning" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @endcan
                                                        
                                                </td>
                                                <td>
                                                    @can('roles.destroy')
                                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
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
