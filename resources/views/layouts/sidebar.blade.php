<?php
$roles = auth()->user()->roles;
$array = json_decode($roles);
$rol = $array[0]->name;
?>
  <!-- Main sidebar -->
  <div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">
    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Main sidebar</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body card-img-top">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="{{asset("assets/limitless/global_assets/images/placeholders/placeholder.jpg")}}" class="img-fluid rounded-circle shadow-2 mb-3" width="80" height="80" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">{{Auth::user()->name }} {{Auth::user()->lastname}}</h6>
                    <span class="font-size-sm text-white text-shadow-dark">{{Auth::user()->email}}</span>
                </div>
                                            
                <div class="sidebar-user-material-footer">
                    <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link"
                           onclick="event.preventDefault();
                                         document.getElementById('logout').submit();">
                          <i class="icon-switch2"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->
        <!-- Navigation -->
        <div class="card card-sidebar-mobile">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Navigation</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header pt-0 mt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        @can('view_user')
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>User</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"> <a href="{{route('view_user')}}" class="nav-link">Table User</a></li>
                            <li class="nav-item"> <a href="{{route ('view_create_user')}}" class="nav-link">Register User</a></li>
                        </ul>
                        @endcan
                    </li>
                    @can('view_role')
                    <li class="nav-item">
                        <a href="{{route('view_role')}}"class="nav-link"><i class="icon-color-sampler"></i> <span>Roles</span></a>
                    </li>
                    @endcan
                    @can('view_room')
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Room</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                            <li class="nav-item"><a href="{{route('view_room')}}"  class="nav-link">Table Room</a></li>
                            <li class="nav-item"><a href="{{route('view_create_room')}}"  class="nav-link">Register Room</a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('view_service')
                    <li class="nav-item"><a href="{{route('view_service')}}" class="nav-link"><i class="icon-width"></i><span>Services</span></a></li>
                    @endcan
                    @can('view_permission')
                    <li class="nav-item"><a href="{{route('view_permission')}}" class="nav-link"><i class="icon-tree5"></i><span>Permissions</span></a></li>
                    @endcan
                    @if($rol == "User")
                    <li class="nav-item ">
                        <a href="{{route('view_service_user')}}" class="nav-link"><i class="icon-width"></i> <span>Services</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('view_roomUser')}}" class="nav-link"><i class="icon-stack"></i> <span> Table Room</span></a>
                    </li>              
                    <li class="nav-item nav-item-submenu">
                        <a href="" class="nav-link"><i class="icon-copy"></i> <span>Reservation</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"> <a href="{{route('view_reserva')}}" class="nav-link">Table Reservation</a></li>
                            <li class="nav-item"> <a href="{{route ('view_create_reserva')}}" class="nav-link">Register Reservation</a></li>
                            <li class="nav-item"> <a href="{{route ('view_create_cliente')}}" class="nav-link">Register Cliente</a></li>
                        </ul>
                    </li>
                    @endif
                        
                </ul>
            </div>
        </div>
        <!-- /navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>
<!-- /main sidebar -->