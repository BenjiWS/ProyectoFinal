<?php
$roles = auth()->user()->roles;
$array = json_decode($roles);
$rol = $array[0]->name;
?>
  <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="assets/cool/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        @if($rol == "Admin")
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Users</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{route('view_user')}}">User Table</a>
                                </li>
                                <li>
                                    <a href="{{route ('view_create_user')}}">Register User</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Roles</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Rooms</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Services</a>
                        </li>
                        @endif
                        @if($rol == "User")
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Reservas</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Room</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Services</a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->