<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Global Hub of Technology In Congo')</title>
    <!-- Lien CDN de Tailwind CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href='{{ url("img/favicon.png") }}'>
    
    <link rel="stylesheet" href='{{ url("css/bootstrap.min.css") }}'>
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href='{{ url("css/all.min.css") }}'>
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href='{{ url("css/animate.css") }}'>
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href='{{ url("css/magnific-popup.css") }}'>
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href='{{ url("css/meanmenu.css") }}'>
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href='{{ url("css/swiper-bundle.min.css") }}'>
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href='{{ url("css/nice-select.css") }}'>
    <!--<< Main.css >>-->
    <link rel="stylesheet" href='{{ url("css/main.css") }}'>

</head>

 <style>
    #mobile-menu li a.link {
        color: white;
    }
</style>

<body>
    <!-- Contenu principal -->
     <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
            <div class="txt-loading">
                <span data-text-preloader="H" class="letters-loading">
                    G
                </span>
                <span data-text-preloader="U" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="B" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="F" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    
                </span>
            </div>
            <p class="text-center">Chargement</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!--<< Mouse Cursor Start >>-->  
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{url('img/logo/logo-colored.png')}}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        
                        
                        <div class="social-icon d-flex align-items-center">
                            <a href="Javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                            <a href="Javascript:void(0);"><i class="fab fa-twitter"></i></a>
                            <a href="Javascript:void(0);"><i class="fab fa-youtube"></i></a>
                            <a href="Javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header>
        <div class="header-top-section top-style-3">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="Javascript:void(0);" class="link">info@globalhub-congo.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="">+243 823539029 </a>
                        </li>
                    </ul>
                    <div class="top-right">
                        
                        <div class="social-icon d-flex align-items-center">
         
                            <a href="Javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
               
                            <a href="Javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="Javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-3 section-bg-2">
            <div class="plane-shape">
                <img src="{{url('img/plane.png')}}" alt="shape-img">
            </div>
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.php" class="header-logo">
                                    <img height="70"src="{{url('img/logo/logohub.svg')}}" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="{{ url('/') }}" class="link">Accueil </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/technoscope') }}" class="link">Technoscope</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ url('/about') }}" class="link">
                                                    A Propos
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#team">Notre équipe</a></li>
                                                    <li><a href="#">Nos valeurs</a></li>
                                                    <li><a href="#">Notre histoire</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" class="link">
                                                    Programme
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="#">Incubateur</a></li>
                                                    <li><a href="#">Accélérateur</a></li>
                                                    <li><a href="#">Formation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#footer" class="link">Contact</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#" class="link">
                                                    Projets
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                            Evénements
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="#">Calendrier</a></li>
                                                            <li><a href="#">Passés</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                        Communauté
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="#">Membres</a></li>
                                                            <li><a href="#">Partenaire</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                        Ressources
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="#">Guides</a></li>
                                                            <li><a href="#">Outils</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="">
        @yield('content')
    </div>
    
            <!--<< Footer Section Start >>-->
        <footer class="footer-section footer-bg" Id="footer">
            <div class="footer-shape-4">
                <img src="{{url('img/footer-shape-4.png')}}" alt="shape-img" style="width: 100%">
            </div>
            <div class="shape-2">
                <img src="{{url('img/footer-shape-3.png')}}" alt="shape-img" style="width: 98%">
            </div>
            <div class="footer-widgets-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>About Us</h3>
                                </div>
                                <div class="footer-content">
                                    <p>
                                    Le Global Technology Hub de la République démocratique du Congo (RDC) est une plateforme centrale qui rassemble les centres technologiques existants et émergents à travers le pays.

                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="Javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                                        <a href="Javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                        <a href="Javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="Javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/technoscope') }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Technoscope
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Javascript:void(0);">
                                            <i class="fa-solid fa-chevron-right"></i>
                                           Programme
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Javascript:void(0);">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Contact</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="Javascript:void(0);">
                                           
                                           +243 823539029 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Javascript:void(0);">
                                          
                                         info@globalhub-congo.com
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget style-margin">
                                <div class="widget-head">
                                    <h3>Departments</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="department1.php">
                                            <i class="fa-solid fa-chevron-right"></i>
                                           Information Management System
                                        </a>
                                    </li>
                                    <li>
                                        <a href="department2.php">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Cybersecurity , Artificail intelligence and Aeronautic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="department3.php">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Robotics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="department4.php">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            AI & Education
                                        </a>
                                    </li>
                                    <li>
                                        <a href="department5.php">
                                            <i class="fa-solid fa-chevron-right"></i>
                                           Energy Transition and New technologies
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-footer-widget style-margin">
                               
                              
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
             <div class="footer-bottom style-2">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            ©  Copyright 2024 
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li>
                                <a href="Javascript:void(0);">
                                    Global Hub Of Technology In Congo
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </footer>

        
        <!--<< All JS Plugins >>-->
        <script src="{{ url('js/jquery-3.7.1.min.js')}}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ url('js/viewport.jquery.js')}}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ url('js/jquery.nice-select.min.js')}}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ url('js/jquery.waypoints.js')}}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ url('js/jquery.counterup.min.js')}}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ url('js/swiper-bundle.min.js')}}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ url('js/jquery.meanmenu.min.js')}}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ url('js/jquery.magnific-popup.min.js')}}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ url('js/wow.min.js')}}"></script>
        <!--<< Main.js >>-->
        <script src="{{ url('js/main.js')}}"></script>
    </body>

</html>