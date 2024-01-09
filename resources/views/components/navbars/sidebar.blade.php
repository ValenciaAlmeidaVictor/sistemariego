@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <script src="https:/kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ url('/dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">MaxAspersor</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Dashboard</h6>
            </li>
            @can('Humedad.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/Humedad') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <span class="nav-link-text ms-1">Clima</span>
                </a>
            </li>
            @endcan

           @can('users.index')<!--Acceso protegido por los permisos-->
               
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Seguridad</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/users') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            @endcan
            @can('roles.index')
                
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/roles') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-users-cog"></i>
                    </div>
                    <span class="nav-link-text ms-1">Roles</span>
                </a>
            </li>
            @endcan

            @can('permissions.index')
                    
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/permissions') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-user-cog"></i>
                    </div>
                    <span class="nav-link-text ms-1">Permisos</span>
                </a>
            </li>
            @endcan
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>
            @can('invernaderos.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/invernaderos') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <span class="nav-link-text ms-1">Invernadero</span>
                </a>
            </li>
            
            @endcan
            @can('camas.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/camas') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <span class="nav-link-text ms-1">Camas</span>
                </a>
            </li>
            @endcan
            @can('tipo-sensores.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/tipo-sensores') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-tablet"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tipo Sensor</span>
                </a>
            </li>
            @endcan
            @can('sensores.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/sensores') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-table opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sensores</span>
                </a>
            </li>
            @endcan
            
            @can('camas-sensores.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('camas-sensores') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-satellite-dish"></i>
                    </div>
                    <span class="nav-link-text ms-1">Camas Sensores</span>
                </a>
            </li>
            @endcan
            @can('estados.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/estados') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <span class="nav-link-text ms-1">Estado</span>
                </a>
            </li>
            @endcan
            @can('tipos-cultivos.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/tipos-cultivos') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tipo Cultivos</span>
                </a>
            </li>
            @endcan
            @can('cultivos.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/cultivos') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-brands fa-pagelines"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cultivos</span>
                </a>
            </li>
            @endcan
            @can('cultivos-camas.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/cultivos-camas') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-tree"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cultivos-Camas</span>
                </a>
            </li>
            @endcan
            @can('tipos-disps-intels.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/tipos-disps-intels') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-tv"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tipo dispositivo Inteligente</span>
                </a>
            </li>
            @endcan
            @can('disps-intels.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/disps-intels') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house-laptop"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dispositivo Inteligente</span>
                </a>
            </li>
            @endcan
            @can('histos-disps-intels.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/histos-disps-intels') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-clipboard-list"></i>
                    </div>
                    <span class="nav-link-text ms-1">Historial de Dispositivo</span>
                </a>
            </li>
            @endcan
            @can('lecturas-sensores.index')
            <li class="nav-item">
                <a class="nav-link text-white  "
                    href="{{ url('/lecturas-sensores') }}"> <!-- EL URL ES PARA HACER LLAMADOS DE RUTAS CON DATOS -->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-table opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Lecturas Sensores</span>
                </a>
            </li>
            @endcan
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'profile' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
                        </li>
                        <li class="nav-item">
                <a href="javascript:;" class="nav-link text-white" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('static-sign-up') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    </div>
</aside>