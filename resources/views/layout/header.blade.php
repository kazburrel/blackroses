<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    {{-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]
    [if lt IE 9]><script src="js/respond.js"></script><![endif] --}}
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">

                        <!--Top Left-->
                        <div class="top-left">
                            <ul class="clearfix">
                                <li><span class="icon flaticon-technology"></span>{{ $setting->phone }}</li>
                                <li><span class="icon flaticon-note"></span>{{ $setting->email }}</li>
                            </ul>
                        </div>

                        <!--Top Right-->
                        <div class="top-right">

                            <!--social-icon-->
                            <div class="social-icon">
                                <a href="{{ $setting->facebook }}"><span class="fa fa-facebook"></span></a>
                                <a href="{{ $setting->linkedln }}"><span class="fa fa-linkedin"></span></a>
                                <a href="{{ $setting->instagram }}"><span class="fa fa-instagram"></span></a>
                                <a href="{{ $setting->twitter }}"><span class="fa fa-twitter"></span></a>
                            </div>


                        </div>

                    </div>

                </div>
            </div><!-- Header Top End -->


            <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('home') }}"><img src="images/logo.png"
                                        alt=""></a>
                            </div>
                        </div>

                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="{{ request()->routeIs('home') ? 'current' : '' }} "><a
                                                href="{{ route('home') }}">Home</a>

                                        </li>
                                        <li
                                            class="{{ request()->routeIs('about', 'team', 'dropdown.*') ? 'current' : '' }} dropdown">
                                            <a href="#">About Us</a>
                                            <ul>
                                                <li><a href="{{ route('about') }}">About Us</a></li>
                                                <li><a href="{{ route('team') }}">Our Team</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a
                                                href="{{ route('services') }}">Services</a> </li>
                                        {{-- <li class="dropdown"><a href="#">Referrals</a> </li> --}}
                                        <li class="{{ request()->routeIs('referrals') ? 'current' : '' }}"><a
                                                href="{{ route('referrals') }}">referrals</a></li>
                                        {{-- <li class="{{ request()->routeIs('testmonials') ? 'current' : '' }}"><a
                                                href="{{ route('testmonials') }}">Testmonies</a> </li> --}}
                                        <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a
                                                href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->

                        </div><!--Nav Outer End-->

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                        </div><!-- / Hidden Nav Toggler -->

                    </div>
                </div>
            </div>

        </header>
        <!--End Main Header -->


        <!-- Hidden Navigation Bar -->
        <section class="hidden-bar right-align">

            <div class="hidden-bar-closer">
                <button class="btn"><i class="fa fa-close"></i></button>
            </div>

            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">

                <!-- .logo -->
                <div class="logo text-center">
                    <a href="{{ route('home') }}"><img src="images/logo-2.png" alt=""></a>
                </div><!-- /.logo -->

                <!-- .Side-menu -->
                <div class="side-menu">
                    <!-- .navigation -->
                    <ul class="navigation">
                        <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a
                                href="{{ route('home') }}">Home</a>

                        </li>
                        <li class="{{ request()->routeIs('about', 'team', 'dropdown.*') ? 'current' : '' }} dropdown">
                            <a href="#">About Us</a>
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('team') }}">Our Team</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a
                                href="{{ route('services') }}">Services</a> </li>
                        {{-- <li class="dropdown"><a href="#">Referrals</a> </li> --}}
                        <li class="{{ request()->routeIs('referrals') ? 'current' : '' }}"><a
                                href="{{ route('referrals') }}">referrals</a></li>
                        {{-- <li class="{{ request()->routeIs('testmonials') ? 'current' : '' }}"><a
                                href="{{ route('testmonials') }}">Testmonies</a> </li> --}}
                        <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a
                                href="{{ route('contact') }}">Contact</a></li>

                    </ul>
                </div><!-- /.Side-menu -->

                <div class="social-icons">
                    <ul>
                        <li><a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $setting->linkedln }}"><i class="fa fa-twitter"></i></a></li>
                        <a href="{{ $setting->instagram }}"><span class="fa fa-instagram"></span></a>
                        <li><a href="{{ $setting->twitter }}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div><!-- / Hidden Bar Wrapper -->
        </section>
        <!-- / Hidden Bar -->
