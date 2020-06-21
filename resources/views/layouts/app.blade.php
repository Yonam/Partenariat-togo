<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setting('site.title') }}</title>




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
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="http://partenariat-togo.org">
                                 <img src="{{ asset('images/logo-petit-144x147.png') }}" alt="" title="" style="height: 4.3rem;">
                            </a>
                        </span>
                        
                    </div>
                </div>

                @guest
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="{{ url('/') }}">
                                Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Cibles
                            </a>
                            <div class="dropdown-menu">
                                <a class="text-black dropdown-item display-4" href="welcome#tabs4-b">Etudiants
                                </a>
                                <a class="text-black dropdown-item display-4" href="welcome#tabs4-b" aria-expanded="true">Entrepreuneurs
                                </a>
                                <a class="text-black dropdown-item display-4" href="welcome#tabs4-b">Particuliers
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="{{ url('/about') }}">
                                A propos
                            </a>
                        </li>
                        <li class="nav-item dropdown open">
                            <a class="nav-link link text-black dropdown-toggle display-4" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="true">
                                Nous telephoner&nbsp;
                            </a>
                            <div class="dropdown-menu">
                                <a class="text-black dropdown-item display-4" href="tel:+32-474324089">Belgique
                                </a>
                                <a class="text-black dropdown-item display-4" href="tel:+228-90909090" aria-expanded="true">Togo
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn btn-sm btn-primary display-4" href="{{ route('login') }}"><span class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span>
                            </a></div>
                </div>
                @else

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="{{ url('/') }}">
                                Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="{{ url('/home') }}">
                                blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                                {{ Auth::user()->name }} 
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- Afficher le lien de redirection vers l'interface d'administration si le compte est un compte admin -->
                                @if(Auth::user()->role_id == 1)

                                <a class="text-black dropdown-item display-4" href="{{ url('admin') }}">Administration
                                </a>

                                @endif

                                <a class="text-black dropdown-item display-4" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Deconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>

                @endguest
            </nav>
        </section>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <section class="cid-qTkAaeaxX5" id="footer1-2">

        <div class="container">
            <div class="media-container-row content text-white">
                <div class="col-12 col-md-3">
                    <div class="media-wrap">
                        <a href="https://mobirise.com/">
                            <img src="{{ asset ('images/logo-petit-192x196.png') }}" alt="partenariat-togo" title="">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Address
                    </h5>
                    <p class="mbr-text">
                        1234 Street Name
                        <br>City, AA 99999
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Contacts
                    </h5>
                    <p class="mbr-text">
                        Email: support@mobirise.com
                        <br>Phone: +1 (0) 000 0000 001
                        <br>Fax: +1 (0) 000 0000 002
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Links
                    </h5>
                    <p class="mbr-text">
                        <a class="text-primary" href="https://mobirise.com/">Website builder</a>
                        <br><a class="text-primary" href="https://mobirise.com/mobirise-free-win.zip">Download for Windows</a>
                        <br><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip">Download for Mac</a>
                    </p>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright 2020 Partenariat Togo - All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/mobirise" target="_blank">
                                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/mobirise" target="_blank">
                                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


      <script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('popper/popper.min.js') }}"></script>
      <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('parallax/jarallax.min.js') }}"></script>
      <script src="{{ asset('smoothscroll/smooth-scroll.js') }}"></script>
      <script src="{{ asset('ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
      <script src="{{ asset('vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
      <script src="{{ asset('tether/tether.min.js') }}"></script>
      <script src="{{ asset('bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
      <script src="{{ asset('web/assets/cookies-alert-plugin/cookies-alert-core.js') }}"></script>
      <script src="{{ asset('web/assets/cookies-alert-plugin/cookies-alert-script.js') }}"></script>
      <script src="{{ asset('mbr-tabs/mbr-tabs.js') }}"></script>
      <script src="{{ asset('touchswipe/jquery.touch-swipe.min.js') }}"></script>
      <script src="{{ asset('mbr-testimonials-slider/mbr-testimonials-slider.js') }}"></script>
      <script src="{{ asset('mbr-clients-slider/mbr-clients-slider.js') }}"></script>
      <script src="{{ asset('mbr-popup-btns/mbr-popup-btns.js') }}"></script>
      <script src="{{ asset('sociallikes/social-likes.js') }}"></script>
      <script src="{{ asset('dropdown/js/nav-dropdown.js') }}"></script>
      <script src="{{ asset('dropdown/js/navbar-dropdown.js') }}"></script>
      <script src="{{ asset('viewportchecker/jquery.viewportchecker.js') }}"></script>
      <script src="{{ asset('theme/js/script.js') }}"></script>
      <script src="{{ asset('slidervideo/script.js') }}"></script>
  
  
    <input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.99)' data-cookie-textButton='Agree' data-cookie-colorButton='' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
    <input name="animation" type="hidden">
  </body>
</html>
