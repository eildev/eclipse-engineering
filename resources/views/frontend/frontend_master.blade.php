<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>Eclipse Engineering Limited</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/assets/images/fav.svg" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/fav.svg" />

    <!-- CSS here -->
    {{-- bootstrap 5 --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome-pro.min.css" />
    {{-- flat-icon --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon_solar_plus.css" />
    {{-- swiper css  --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper.min.css" />
    {{-- odometer css  --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/odometer.min.css" />
    {{-- magnify css  --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css" />
    {{-- meanmenu css  --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.css" />
    {{-- toastr css  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    {{-- main css  --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css" />
</head>

<body>
    {{-- <!-- Preloader start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
                <div class="loader-icon">
                    <img src="{{ asset('frontend') }}/assets/images/fav.svg"
                        alt="Solar & Renewable Energy HTML Template" />
                </div>
            </div>
            <div class="txt-loading">
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <span data-text-preloader="C" class="letters-loading"> C </span>
                <span data-text-preloader="L" class="letters-loading"> L </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="P" class="letters-loading"> P </span>
                <span data-text-preloader="S" class="letters-loading"> S </span>
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <br>
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <span data-text-preloader="N" class="letters-loading"> N </span>
                <span data-text-preloader="G" class="letters-loading"> G </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="N" class="letters-loading"> N </span>
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <span data-text-preloader="E" class="letters-loading"> E </span>
                <span data-text-preloader="R" class="letters-loading"> R </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="N" class="letters-loading"> N </span>
                <span data-text-preloader="G" class="letters-loading"> G </span>
            </div>
        </div>
        <button class="tj-header-btn btn">Cancel Preloader</button>
    </div>
    <!-- Preloader end --> --}}

    <!-- start: Offcanvas Area -->
    <div id="tj-overlay-bg" class="tj-overlay-canvas"></div>
    <div class="tj-offcanvas-area">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="index.html">
                    <img src="{{ asset('frontend') }}/assets/images/logos/eel-white-logo.png" alt="Logo" />
                </a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <i class="fa-light fa-xmark"></i>
                </a>
            </div>
        </div>
        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
        <div class="canvas-content-area d-none d-lg-block">
            <div class="contact-info-list">
                <p class="des">
                    We take a bottom-line approach to each project. Our clients consistently, enhanced brand loyalty
                    and new leads thanks to our work.
                </p>
                <div class="canvas-title">
                    <h4 class="title">Contact info</h4>
                </div>
                <div class="footer-contact">
                    <ul>
                        <li><i class="flaticon-location"></i> 2972 Westheimer Rd. Santa Ana, Illinois 937949</li>
                        <li>
                            <i class="flaticon-open"></i>
                            <a href="mailto:solarplus@gmail.com">Solarplus@gmail.com </a>
                            <a href="mailto:infosolarplus@gmail.com">infosolarplus@gmail.com</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:(1234)5678900">(1234)-567-8900 </a>
                            <a class="d-block" href="tel:1234567890000">123-456-7890000</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas-share">
                <div class="canvas-title">
                    <h4 class="title">Social Icons</h4>
                </div>
                <ul>
                    <li>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                </ul>
            </div>
            <div class="contact-map">
                <iframe
                    src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                    style="border: 0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <!-- end: Offcanvas Area -->

    <!-- start: Search Popup -->
    {{-- <div class="search_popup">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="search_wrapper">
                        <div class="search_top d-flex justify-content-between align-items-center">
                            <div class="search_logo">
                                <a href="index.html">
                                    <img src="{{ asset('frontend') }}/assets/images/logos/main-logo.png"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="search_close">
                                <button type="button" class="search_close_btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <input class="search-input-field" type="text" placeholder="" />
                                    <span class="search-focus-border"></span>
                                    <button type="submit">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div> --}}
    <!-- end: Search Popup -->

    <!-- start: Header Area -->
    @include('frontend.body.header')
    <!-- end: Header Area -->

    <main class="site-main">
        @yield('content')
    </main>

    <!-- start: Footer Area -->
    @include('frontend.body.footer')
    <!-- start: Footer Area -->

    <!-- start: Scroll Area -->
    <div class="solar-scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    ">
            </path>
        </svg>
        <div class="solar-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- end: Scroll Area -->

    <!-- JS here -->
    {{-- jquery  --}}
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    {{-- bootstrap js  --}}
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    {{-- waypoints js  --}}
    <script src="{{ asset('frontend') }}/assets/js/waypoints.min.js"></script>
    {{-- odometer js  --}}
    <script src="{{ asset('frontend') }}/assets/js/odometer.min.js"></script>
    {{-- swiper js  --}}
    <script src="{{ asset('frontend') }}/assets/js/swiper.min.js"></script>
    {{-- popup js  --}}
    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.js"></script>
    {{-- imgeloaded-pkgd js  --}}
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded-pkgd.js"></script>
    {{-- meanmenu js  --}}
    <script src="{{ asset('frontend') }}/assets/js/meanmenu.js"></script>
    {{-- tostr js  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- main js  --}}
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
