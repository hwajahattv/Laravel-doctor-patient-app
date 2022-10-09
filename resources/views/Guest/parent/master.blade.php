<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!--
THEME: Medic | Medical HTML Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/medic-medical-template/
DEMO: https://demo.themefisher.com/themefisher/medic/
GITHUB: https://github.com/themefisher/Medic-Bootstrap-Medical-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Medic | Medical HTML Template</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medical HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Medical HTML Template v1.0">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/slick/slick-theme.css') }}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{ asset('/plugins/fancybox/jquery.fancybox.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('/plugins/animation/animate.min.css') }}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{ asset('/plugins/jquery-ui/jquery-ui.css') }}">
    <!-- timePicker -->
    <link rel="stylesheet" href="{{ asset('/plugins/timePicker/timePicker.css') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

</head>


<body>
    <div class="page-wrapper">



        <!--header top-->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="top-left text-center text-md-left">
                            <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
                        </div>
                    </div>
                    <div class="col-md-4 link-btn text-center text-lg-right">
                        <a href="/login" class="btn-style-one">Make
                            an
                            appointment</a>
                    </div>
                    <div class="col-md-4">
                        <div class="top-right text-center text-md-right">
                            <ul class="social-links">
                                <li>
                                    <a href="https://themefisher.com/" aria-label="facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://themefisher.com/" aria-label="twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://themefisher.com/" aria-label="google-plus">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://themefisher.com/" aria-label="instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://themefisher.com/" aria-label="pinterest">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side Of Navbar -->

        </div>
        <!--header top-->

        {{-- <!--Header Upper-->
        <section class="header-uper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img loading="lazy" class="img-fluid" src="images/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="right-side">
                            <ul class="contact-info pl-0 mb-4 mb-md-0">
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <strong>Email</strong>
                                    <br>
                                    <a href="mailto:info@medic.com">
                                        <span>info@medic.com</span>
                                    </a>
                                </li>
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <strong>Call Now</strong>
                                    <br>
                                    <span>+ (88017) - 123 - 4567</span>
                                </li>
                            </ul>
                            <div class="link-btn text-center text-lg-right">
                                <a href="contact.html" class="btn-style-one">Make an appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Header Upper--> --}}
        <section class="header-uper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img loading="lazy" class="img-fluid" src="{{ asset('images/logo.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarLinks" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarLinks">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="nav-item @@about">
                                            <a class="nav-link" href="{{ url('/aboutUs') }}">About</a>
                                        </li>
                                        <li class="nav-item @@service">
                                            <a class="nav-link" href="{{ url('/services') }}">Services</a>
                                        </li>
                                        <li class="nav-item @@gallery">
                                            <a class="nav-link" href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="nav-item @@team">
                                            <a class="nav-link" href="{{ url('/team') }}">Team</a>
                                        </li>
                                        {{-- <li class="nav-item @@appointment">
                                            <a class="nav-link" href="/showAppointmentsList">Appointment</a>
                                        </li> --}}
                                        <li class="nav-item dropdown @@blogs">
                                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Blogs</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item @@blog"
                                                        href="blog.html">Blog</a></li>
                                                <li><a class="dropdown-item @@blogDetails"
                                                        href="blog-details.html">Blog
                                                        Details</a></li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!"
                                                        id="navbarDropdown" role="button" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="index.html">Submenu 01</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="index.html">Submenu 02</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item @@contact">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                        <ul class="navbar-nav ms-auto">
                                            <!-- Authentication Links -->
                                            @guest
                                                @if (Route::has('login'))
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                @endif

                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item"
                                                            href="{{ url('/profilePatient' . '/' . Auth::id()) }}">
                                                            My Profile
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>


                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                    {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                </div> --}}
                                                </li>
                                            @endguest
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!--End Main Header -->
                    </div>
                </div>
            </div>
        </section>
        <!--Header Upper-->

        {{-- <!--Main Header-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarLinks">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item @@about">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item @@service">
                            <a class="nav-link" href="{{ url('/services') }}">Service</a>
                        </li>
                        <li class="nav-item @@gallery">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item @@team">
                            <a class="nav-link" href="{{ url('/team') }}">Team</a>
                        </li>
                        <li class="nav-item @@appointment">
                            <a class="nav-link" href="/showAppointment">Appointment</a>
                        </li>
                        <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item @@blogDetails" href="blog-details.html">Blog
                                        Details</a></li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Sub Menu</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @@contact">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/profile' . '/' . Auth::id()) }}">
                                            My Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End Main Header --> --}}

        @yield('content')

        <!--footer-main-->
        <footer class="footer-main">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index.html">
                                            <img loading="lazy" class="img-fluid" src="images/logo-2.png"
                                                alt="medic">
                                        </a>
                                    </figure>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
                                <ul class="location-link">
                                    <li class="item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p>Modamba, NY 80021, United States</p>
                                    </li>
                                    <li class="item">
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:support@medic.com">
                                            <p>support@medic.com</p>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <p>(88017) +123 4567</p>
                                    </li>
                                </ul>
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item"><a href="https://facebook.com/themefisher"
                                            aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/themefisher"
                                            aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://instagram.com/themefisher"
                                            aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://github.com/themefisher"
                                            aria-label="github"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                            <h2>Services</h2>
                            <ul class="menu-link">
                                <li>
                                    <a href="service.html">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
                                </li>
                                <li>
                                    <a href="service.html">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
                                </li>
                                <li>
                                    <a href="service.html">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
                                </li>
                                <li>
                                    <a href="service.html">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
                                </li>
                                <li>
                                    <a href="service.html">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="social-links">
                                <h2>Recent Posts</h2>
                                <ul>
                                    <li class="item">
                                        <div class="media">
                                            <div class="media-left mr-3">
                                                <a href="blog-details.html">
                                                    <img loading="lazy" src="images/blog/post-thumb-small.jpg"
                                                        alt="post-thumb">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="blog-details.html">A lesson adip isicing</a></h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                                                    dolorem.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="media">
                                            <div class="media-left mr-3">
                                                <a href="blog-details.html">
                                                    <img loading="lazy" src="images/blog/post-thumb-small.jpg"
                                                        alt="post-thumb">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="blog-details.html">How to make an event</a></h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                                                    dolorem.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container clearfix">
                    <div class="copyright-text">
                        <p>&copy; Copyright 2021. Designed &amp; Developed by <a
                                href="https://themefisher.com/">Themefisher</a></p>
                    </div>
                    <ul class="footer-bottom-link">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--End footer-main-->

        <!-- scroll-to-top -->
        <div id="back-to-top" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </div>

    </div>
    <!--End pagewrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
        <span class="icon fa fa-angle-up"></span>
    </div>


    <!-- jquery -->
    <script src="{{ asset('/plugins/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
    <!-- FancyBox -->
    <script src="{{ asset('/plugins/fancybox/jquery.fancybox.min.js') }}" defer></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{ asset('/plugins/google-map/gmap.js') }}" defer></script>

    <!-- jquery-ui -->
    <script src="{{ asset('/plugins/jquery-ui/jquery-ui.js') }}" defer></script>
    <!-- timePicker -->
    <script src="{{ asset('/plugins/timePicker/timePicker.js') }}" defer></script>

    <!-- font awesome -->

    <script src="https://kit.fontawesome.com/a1a44d351e.js" crossorigin="anonymous"></script>
    <!-- script js -->
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>
