@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/csr-activities.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">CSR Activities</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>CSR Activities</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    <!--=========== Blog Grid Start =========-->
    <section class="tj-blog-grid-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-content-area">
                        <div class="tj-sec-heading-four">
                            <span class="sub-title">Our CSR Activities</span>
                            <h2 class="sec-title">Latest Story <span>From Blog</span></h2>
                        </div>
                        <div class="blog-desc">
                            <p>
                                Lorem Ipsum has been the industry's standard text ever since the 1500s,
                                unchanged.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tj-blog-item">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/images/blog/blog-1.jpg"
                                    alt="Image" /></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Dec 1, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h5 class="title">
                                    <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-blog-item">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/images/blog/blog-2.jpg"
                                    alt="Image" /></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> May 7, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h5 class="title">
                                    <a href="blog-details.html">Saw Scond Earth Do Grass Very Hot Wathers</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-blog-item">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/images/blog/blog-3.jpg"
                                    alt="Image" /></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Jan 5, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h5 class="title">
                                    <a href="blog-details.html">Heaced Maece Nasera Tortor Convallis Dise Ann
                                        Enget</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-blog-item">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/images/blog/blog-13.jpg"
                                    alt="Image" /></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Aug 12, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h5 class="title">
                                    <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-blog-item">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/images/blog/blog-14.jpg"
                                    alt="Image" /></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Nov 12, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h5 class="title">
                                    <a href="blog-details.html">Saw Scond Earth Do Grass Very Hot Wathers</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-blog-item">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{ asset('frontend') }}/assets/images/blog/blog-15.jpg"
                                    alt="Image" /></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> Feb 22, 2023</li>
                                    <li><i class="flaticon-chat"></i> Comment (1)</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h5 class="title">
                                    <a href="blog-details.html">Heaced Maece Nasera Tortor Convallis Dise Ann
                                        Enget</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Blog Grid End =========-->
@endsection
