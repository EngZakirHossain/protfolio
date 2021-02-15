<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Yucel Yilmaz">
    <meta name="robots" content="index,follow">
    <meta name="publisher" content="Yücel Yilmaz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Filaous - Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakir Hossain- Portfolio </title>
    <!--// Boostrap v5 //-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/css/bootstrap.min.css')}}">
    <!--// Magnific Popup //-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/css/magnific.popup.min.css')}}">
    <!--// Animate Css //-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/css/animate.min.css')}}">
    <!--// Owl Carousel //-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/css/owl.carousel.min.css')}}">
    <!--// Owl Carousel Default //-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/css/owl.carousel.default.min.css')}}">
    <!--// Font Awesome //-->
    <link rel="stylesheet" href="{{asset('frontend/fonts/font_awesome/css/all.css')}}">
    <!--// Flat Icons //-->
    <link rel="stylesheet" href="{{asset('frontend/fonts/flat_icons/flaticon.css')}}">
    <!--// Theme Main Css //-->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!--// Theme Color Css //-->
    <link rel="stylesheet" href="{{asset('frontend/css/skins/turquose-color.css')}}" />
    @yield('css')
</head>
<body data-spy="scroll" data-target="#fixedNavbar">

<!--// Page Wrapper Start //-->
<div class="page-wrapper" id="wrapper">

    <!--// Header Start //-->
    <header class="header fixed-top" id="header">
        <div id="nav-menu-wrap">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" title="Home" href="{{route('index')}}">
                        <img src="{{asset('frontend/img/bg/logo.png')}}" alt="Logo White" class="img-fluid logo-transparent">
                        <img src="{{asset('frontend/img/bg/logo.png')}}" alt="Logo Black" class="img-fluid logo-normal">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar"
                            aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="togler-icon-inner">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                    </button>
                    <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#" data-scroll-nav="1">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#" data-scroll-nav="2">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#" data-scroll-nav="3">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#" data-scroll-nav="4">Portfolio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="blogDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                                    <a class="dropdown-item" href="#">Blog Grid</a>
                                    <a class="dropdown-item" href="#">Blog Single</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#" data-scroll-nav="7">Contact</a>
                            </li>
                            <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                <a href="#" data-scroll-nav="7"  class="primary-btn">
                                    <span class="text">Hire Me</span>
                                    <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--// Header End  //-->

    <!--// Main Area Start //-->
    <main class="main-area">

        @yield('main_content')

