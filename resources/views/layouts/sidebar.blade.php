<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile" style="padding: 2.25rem!important;">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    @if(isset(auth()->user()->image))
                        <img src="{{asset('uploads/'.auth()->user()->image)}}" alt="profile"
                             style="object-fit: cover!important;">
                        <span class="login-status online"></span>
                    @else
                        <img src="{{asset('images/faces-clipart/pic-1.png')}}" alt="profile"
                             style="object-fit: cover!important;">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    @endif
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    {{--                    {{dd(auth()->user()->image)}}--}}
                    <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                    {{--                    <span class="text-secondary text-small">Project Manager</span>--}}
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-title">Inicio</span>
                <i class="fas fa-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Proyectos
                </span>
                <i class="menu-arrow"></i>
                <i class="fas fa-calendar-alt menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    @if(auth()->user()->id_rol == 1)
                        <li class="nav-item"><a class="nav-link" href="{{ route('proyect.create') }}">Nuevo</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{ route('proyect.index') }}">Listado</a></li>
                </ul>
            </div>
        </li>

        @if(auth()->user()->id_rol == 2)

        <li class="nav-item">
            <a class="nav-link" href="{{ route('proyect.myproyect') }}">
                <span class="menu-title">Mis Proyectos</span>
                <i class="fas fa-heart menu-icon"></i>
            </a>
        </li>
        @endif



        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" href="pages/forms/basic_elements.html">--}}
        {{--                <span class="menu-title">Forms</span>--}}
        {{--                <i class="mdi mdi-format-list-bulleted menu-icon"></i>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" href="{{ route('proyect.index') }}">--}}
        {{--                <span class="menu-title">Charts</span>--}}
        {{--                <i class="mdi mdi-chart-bar menu-icon"></i>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" href="pages/tables/basic-table.html">--}}
        {{--                <span class="menu-title">Tables</span>--}}
        {{--                <i class="mdi mdi-table-large menu-icon"></i>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
               aria-controls="general-pages">
                <span class="menu-title">Usuarios</span>
                <i class="menu-arrow"></i>
                <i class="fas fa-users menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    @if(auth()->user()->id_rol == 1)
                        <li class="nav-item"><a class="nav-link" href="{{ route('responsable.create') }}"> Nuevo</a>
                        </li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{ route('responsable.index') }}"> Listado </a></li>
                    {{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>--}}
                    {{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>--}}
                    {{--                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>--}}
                </ul>
            </div>
        </li>
        {{--        <li class="nav-item sidebar-actions">--}}
        {{--              <span class="nav-link">--}}
        {{--                <div class="border-bottom">--}}
        {{--                  <h6 class="font-weight-normal mb-3">Projects</h6>--}}
        {{--                </div>--}}
        {{--                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>--}}
        {{--                <div class="mt-4">--}}
        {{--                  <div class="border-bottom">--}}
        {{--                    <p class="text-secondary">Categories</p>--}}
        {{--                  </div>--}}
        {{--                  <ul class="gradient-bullet-list mt-4">--}}
        {{--                    <li>Free</li>--}}
        {{--                    <li>Pro</li>--}}
        {{--                  </ul>--}}
        {{--                </div>--}}
        {{--              </span>--}}
        {{--        </li>--}}
    </ul>
</nav>
