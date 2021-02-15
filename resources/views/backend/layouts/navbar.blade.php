<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kanakku.dreamguystech.com/template-html/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 08:38:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/img/favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/all.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome/css/fontawesome.min.css') }}">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables/datatables.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

    <!--[if lt IE 9]>
    <script src="{{ asset('backend/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('backend/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('backend/img/2_Logo PNG (Black).png') }}" alt="Logo">
            </a>
            <a href="{{ route('home') }}" class="logo logo-small">
                <img src="{{ asset('backend/img/favicon.ico') }}" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->

        <!-- Sidebar Toggle -->
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>
        <ul class="nav user-menu">

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
								@if (Auth::check())

                                    <img src="{{ asset('backend/img/favicon.ico') }}" alt="">
                                    <span class="status online"></span>
								</span>
                    <span>{{ Auth::User()->name }}</span>
                    @endif

                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i data-feather="user" class="mr-1"></i> Profile</a>
                     <a class="dropdown-item" href="#"><i data-feather="settings" class="mr-1"></i> Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
                        <i data-feather="log-out" class="mr-1"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title"><span>Main</span></li>
                    <li class="@yield('dashboard')">
                        <a href="{{ route('home') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    @yield('content')

</div>
