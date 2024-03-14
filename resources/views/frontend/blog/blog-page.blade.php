@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper"
        data-bg-image="{{ asset('frontend') }}/assets/images/banner/breadcrumb-background.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Blog</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Blog</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->

    <!--=========== Blog Details Start =========-->
    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sidebar-wrapper">
                        <div class="details-item">
                            <div class="blog-thumb-image">
                                <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/images/blog/blog-7.jpg"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-meta-two">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Dec 1, 2023</li>
                                    <li><i class="fa-light fa-users"></i> <a href="#">Admin</a></li>
                                    <li><i class="fa-regular fa-message"></i> Comment</li>
                                </ul>
                            </div>
                            <div class="details-title">
                                <h3 class="title">Winds of Change in the Tubine Service Industry</h3>
                            </div>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint cupiditate non provident, similique sunt indeserunt mollitia
                                animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                expedita distinctio.
                            </p>
                            <div class="blog-button d-flex">
                                <a class="tj-primary-btn btn" href="blog-details.html">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="details-item">
                            <div class="blog-thumb-image">
                                <img src="{{ asset('frontend') }}/assets/images/blog/blog-8.jpg" alt="Image" />
                                <div class="tj-video-area">
                                    <div class="video-box">
                                        <div class="circle pulse video-icon">
                                            <a class="popup-videos-button" data-autoplay="true" data-vbtype="video"
                                                href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-meta-two">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Dec 1, 2023</li>
                                    <li><i class="fa-light fa-users"></i> <a href="#">Admin</a></li>
                                    <li><i class="fa-regular fa-message"></i> Comment</li>
                                </ul>
                            </div>
                            <div class="details-title">
                                <h3 class="title">Biodiversity Conservation & Protected Areas</h3>
                            </div>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint cupiditate non provident, similique sunt indeserunt mollitia
                                animi, distinctio.
                            </p>
                            <div class="blog-button d-flex">
                                <a class="tj-primary-btn btn" href="blog-details.html">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="details-item last-item">
                            <div class="swiper tj-wrapper-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog-thumb-image">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('frontend') }}/assets/images/blog/blog-9.jpg"
                                                    alt="Image" /></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-thumb-image">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('frontend') }}/assets/images/blog/blog-7.jpg"
                                                    alt="Image" /></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-thumb-image">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('frontend') }}/assets/images/blog/blog-8.jpg"
                                                    alt="Image" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-navigation">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            <div class="blog-meta-two">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Dec 1, 2023</li>
                                    <li><i class="fa-light fa-users"></i> <a href="#">Admin</a></li>
                                    <li><i class="fa-regular fa-message"></i> Comment</li>
                                </ul>
                            </div>
                            <div class="details-title">
                                <h3 class="title">Nature’s Partner For Sustainable</h3>
                            </div>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint cupiditate non provident, similique sunt indeserunt mollitia
                                animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                expedita distinctio.
                            </p>
                            <div class="blog-button d-flex">
                                <a class="tj-primary-btn btn" href="blog-details.html">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-pagination">
                            <ul>
                                <li><a class="page-numbers" href="#">01</a></li>
                                <li><a class="page-numbers current" href="#">02</a></li>
                                <li><a class="page-numbers" href="#">03</a></li>
                                <li><a class="page-numbers" href="#">04</a></li>
                                <li>
                                    <a class="page-numbers" href="#"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" name="search" id="searchTwo" placeholder="Search Here" />
                                    <button type="submit" value="search">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Categories</h3>
                            <div class="sidebar-catagory">
                                <ul>
                                    <li>
                                        <a href="#">Commercial
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Environmental
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Hospitals
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Plastice Waste
                                            <span> <i class="fa-light fa-angle-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Recent Post</h3>
                            <div class="sidebar-recent-post">
                                <div class="single-post d-flex align-items-center">
                                    <div class="post-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('frontend') }}/assets/images/blog/post-3.jpg"
                                                alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="blog-meta">
                                            <ul>
                                                <li><i class="flaticon-calendar"></i> Jan 3,</li>
                                                <li><i class="flaticon-chat"></i> Comment</li>
                                            </ul>
                                        </div>
                                        <h5 class="title-link">
                                            <a href="#">Principle Stability in the future with activety</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="single-post d-flex align-items-center">
                                    <div class="post-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('frontend') }}/assets/images/blog/post-4.jpg"
                                                alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="blog-meta">
                                            <ul>
                                                <li><i class="flaticon-calendar"></i> Nov 5,</li>
                                                <li><i class="flaticon-chat"></i> Comment</li>
                                            </ul>
                                        </div>
                                        <h5 class="title-link">
                                            <a href="#">How to invent a law & Pass it in parliament</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="single-post d-flex align-items-center">
                                    <div class="post-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('frontend') }}/assets/images/blog/post-5.jpg"
                                                alt="Blog" /></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="blog-meta">
                                            <ul>
                                                <li><i class="flaticon-calendar"></i> May 9,</li>
                                                <li><i class="flaticon-chat"></i> Comment</li>
                                            </ul>
                                        </div>
                                        <h5 class="title-link">
                                            <a href="#">Illumination the path to a Sustainalble Future</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Popular Tag</h3>
                            <div class="sidebar-tags">
                                <div class="tagcloud">
                                    <a href="#">Engineering</a>
                                    <a href="#">Renewal</a>
                                    <a href="#">Solar</a>
                                    <a href="#">Solar Plans</a>
                                    <a href="#">Gosolar</a>
                                    <a href="#">Wheepup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Blog Details End =========-->
@endsection
