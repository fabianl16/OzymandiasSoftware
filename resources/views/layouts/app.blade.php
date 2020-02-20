<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
     <!--contact js-->
     <script src="{{ asset('js/contact.js')}}"></script>
     <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
     <script src="{{ asset('js/jquery.form.js')}}"></script>
     <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
     <script src="{{ asset('js/mail-script.js')}}"></script>
     <script src="{{ asset('js/main.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS here -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
     <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
     <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
     <link rel="stylesheet" href="{{ asset('css/gijgo.css')}}">
     <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
     <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
     <link rel="stylesheet" href="{{ asset('css/slicknav.css')}}">
     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
 
<link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                            <a href="{{ url('/')}}">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Menu de navegacion-->
                        @guest
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @else
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ url('/') }}">@lang('Home')</a></li>
                                        <li><a href="about.html">@lang('About')</a></li>
                                        <li><a href="#">@lang('Monitoring')</a>
                                            <ul class="submenu">
                                                    <li><a href="facilites.html">@lang('Graphics')</a></li>
                                                    <li><a href="property.html">@lang('Calculations')</a></li>
                                                    <li><a href="elements.html">@lang('Data')</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @endguest

                        <!-- Panel de usuario-->
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                               @guest
                                <div class="login_text">
                                    <a href="{{ route('login') }}">@lang('Login')</a>
                                </div>
                                @else
                                <div class="col-xl-6 col-lg-6">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li>
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                    <ul class="submenu">
                                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">@lang('Logout')</a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form></li>
                                                               
                                                            <li><a href="property.html">Properties</a></li>
                                                            <li><a href="elements.html">elements</a></li>
                                                            
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                                
                                @endguest

                                <div class="number">
                                    <p>Call us <a href="#">+001 325 589</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </header>
</body>
</html>
