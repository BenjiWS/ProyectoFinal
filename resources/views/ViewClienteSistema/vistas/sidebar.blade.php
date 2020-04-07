 <?php
   $id =Auth::user()->idCliente;
    $usuario = DB::table('clientes')->where('id', '=', $id)->first();
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
                    <h6 class="mb-0 text-white text-shadow-dark">{{$usuario->name }} {{$usuario->lastname}}</h6>
                    <span class="font-size-sm text-white text-shadow-dark">{{$usuario->email}}</span>
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

                        <form id="logout" action="{{ route('reservation.logout') }}" method="POST" style="display: none;">
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
                        <a href="{{route('reservation.dashboard')}}" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('view_service_cliente')}}" class="nav-link"><i class="icon-width"></i> <span>Services</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>
<!-- /main sidebar -->