<!-- start: Header Area -->
@php
    $footer = App\Models\FooterSetting::all()->first();
    $social = App\Models\SocialIcon::all()->take(4);
@endphp
<header class="tj-header-area header-absolute header-1">
    <div class="tj-header-topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-content-area">
                        <div class="header-info">
                            <ul>
                                <li><i class="flaticon-back-in-time"></i>Mon - Sat - 9PM</li>
                                <li>
                                    <i class="flaticon-phone"></i><a
                                        href="{{ $footer->phone ?? '(1234)-567-8900' }}">{{ $footer->phone ?? '(1234)-567-8900' }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-share">
                            <ul>
                                <li>
                                    @if ($social->count() > 0)
                                        @foreach ($social as $data)
                                            <a href="{{ $data->link }}"><i
                                                    class="fa-brands fa-x-{{ $data->name }}"></i></a>
                                        @endforeach
                                    @else
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tj-bottom-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-content-area">
                        <div class="menu-area">
                            <div class="logo-area">
                                <a href="{{ route('/') }}"><img
                                        src="{{ asset('frontend') }}/assets/images/logos/eel-white-logo.png"
                                        alt="Logo" /></a>
                            </div>
                            <div class="tj-menu-area d-lg-block d-none">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown current-menu-item">
                                            <a href="{{ route('/') }}">Home</a>
                                            <ul class="sub-menu">
                                                <li class="current-menu-item">
                                                    <a href="{{ route('/') }}">Home One</a>
                                                </li>
                                                <li><a href="{{ route('home2') }}">Home Two</a></li>
                                                <li><a href="{{ route('home3') }}">Home Three</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.about') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('all.service') }}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('all.project') }}">Projects</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="javascript:void(0)">Pages</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('all.team') }}">Team</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('blog') }}">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('sister.concern') }}">Sister Concern</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('csr.activities') }}">CSR Activities</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact.us') }}">Contact Us</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="info-right-item">
                            <div class="info-navbar">
                                <ul>
                                    {{-- <li class="header_searce">
                                        <button class="search-btn">
                                            <i class="flaticon-search"></i>
                                        </button>
                                    </li> --}}
                                    <li>
                                        <a class="canva_expander nav-menu-link menu-button" href="#"><i
                                                class="flaticon-menu"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info-item d-none d-md-block">
                                <a class="tj-header-btn btn" href="{{ route('contact.us') }}">Contact Us <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="tj-header-area header-sticky header-1">
    <div class="tj-bottom-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-content-area">
                        <div class="menu-area">
                            <div class="logo-area">
                                <a href="{{ route('/') }}"><img
                                        src="{{ asset('frontend') }}/assets/images/logos/eel-white-logo.png"
                                        alt="Logo" /></a>
                            </div>
                            <div class="tj-menu-area d-lg-block d-none" id="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown current-menu-item">
                                            <a href="{{ route('/') }}">Home</a>
                                            <ul class="sub-menu">
                                                <li class="current-menu-item">
                                                    <a href="{{ route('/') }}">Home One</a>
                                                </li>
                                                <li><a href="{{ route('home2') }}">Home Two</a></li>
                                                <li><a href="{{ route('home3') }}">Home Three</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.about') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('all.service') }}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('all.project') }}">Projects</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="javascript:void(0)">Pages</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('all.team') }}">Team</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('blog') }}">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('sister.concern') }}">Sister Concern</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('csr.activities') }}">CSR Activities</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact.us') }}">Contact Us</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="info-right-item">
                            <div class="info-navbar">
                                <ul>
                                    {{-- <li class="header_searce">
                                        <button class="search-btn">
                                            <i class="flaticon-search"></i>
                                        </button>
                                    </li> --}}
                                    <li>
                                        <a class="canva_expander nav-menu-link menu-button" href="#"><i
                                                class="flaticon-menu"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info-item d-none d-md-block">
                                <a class="tj-header-btn btn" href="{{ route('contact.us') }}">Contact Us <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->
