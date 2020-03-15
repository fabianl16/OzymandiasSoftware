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
    <script type="text/javascript" src="{{ asset('js/function-color.js') }}"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
     <link rel="stylesheet" href="{{ asset('css/login.css')}}">
     <link rel="stylesheet" href="{{ asset('css/style.css')}}">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <link rel="stylesheet" href="css/style.css">

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
                                                    <li><a href="{{ route('calculation') }}">@lang('Calculations')</a></li>
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
    <!-- footer_start  -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                Contact Info
                            </h3>
                            <p>Address :Your address goes
                                here, your demo address.</p>
                            <ul>
                                <li><a href="#">Phone : +8880 44338899</a></li>
                                <li><a href="#">Email : info@colorlib.com</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                Important Link
                            </h3>
                            <ul>
                                <li><a href="#">View Project</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Proparties</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <p class="newsletter_text">
                                Heaven fruitful doesn't over lesser in days. Appear creeping seasons
                            </p>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit"> <i class="fa fa-paper-plane"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-lg-8">
                        <p class="copy_right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->
</body>
</html>
