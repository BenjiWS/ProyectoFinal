<?php
$roles = auth()->user()->roles;
$array = json_decode($roles);
$rol = $array[0]->name;
?>
<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark bg-indigo">
    <div class="navbar-brand wmin-200">
        <a href="index.html" class="d-inline-block">
            <img src="{{asset("assets/limitless/global_assets/images/logo_light.png")}}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="navbar-text ml-md-auto mr-md-3">
            <span class="badge bg-light shadow-1 text-indigo-700">Active</span>
        </span>

        <ul class="navbar-nav">


            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/limitless/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
                    <span>{{ Auth::user()->name }} {{Auth::user()->lastname}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="account-dropdown__footer">  
                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                          <i class="icon-switch2"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->