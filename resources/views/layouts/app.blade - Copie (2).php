<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>




    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('web/assets/mobirise-icons/mobirise-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/mobirise-icons-bold/mobirise-icons-bold.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tether/tether.min.css') }}" rel="stylesheet">
    <link href="{{ asset('animatecss/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('socicon/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('dropdown/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('mobirise/css/mbr-additional.css') }}" rel="preload" as="style">
    <link href="{{ asset('mobirise/css/mbr-additional.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <section class="menu cid-rZ8TaZ6Sce" once="menu" id="menu1-11">
            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
                <div class="container">
                    <!-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', '') }}
                    </a> -->
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    






                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <div class="menu-logo">
                            <div class="navbar-brand">
                                <span class="navbar-logo">
                                    <a href="http://partenariat-togo.org">
                                         <img src="{{ asset('images/logo-petit-144x147.png') }}" alt="partenariat-togo" title="" style="height: 4.3rem;">
                                    </a>
                                </span>
                                
                            </div>
                        </div>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest



                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                                        <li class="nav-item">
                                            <a class="nav-link link text-black display-4" href="{{ url('/') }}">
                                                {{ __('Accueil') }}</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">{{ __('Cibles') }}
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="text-black dropdown-item display-4" href="{{ route('home') }}">{{ __('Etudiants') }}
                                                </a>
                                                <a class="text-black dropdown-item display-4" href="{{ route('home') }}" aria-expanded="true">{{ __('Entrepreneurs') }}
                                                </a>
                                                <a class="text-black dropdown-item display-4" href="{{ route('home') }}">{{ __('Particuliers') }}
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link link text-black display-4" href="{{ route('about') }}">
                                                {{ __('A propos') }}
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown open">
                                            <a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="true">
                                                {{ __('Nous telephoner') }}
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="text-black dropdown-item display-4" href="tel:+32-474324089">{{ __('Belgique') }}
                                                </a>
                                                <a class="text-black dropdown-item display-4" href="tel:+228-90909090" aria-expanded="true">{{ __('Togo') }}
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="{{ route('login') }}"><span class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span>
                                            </a></div>
                                </div>




                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif -->
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
