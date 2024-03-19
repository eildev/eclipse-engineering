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
                            <h1 class="breadcrumb-title">Our Services</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Our Services</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    @php
        $seviceDetails = App\Models\ServicesDetails::latest()->get();
    @endphp
    <!--=========== Service Section Start =========-->
    <section class="tj-service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Our Services</span>
                        <h2 class="sec-title">
                            Solar Renewable Services for <br />
                            <span>A Greener World</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-environmental"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Hydropower Plants</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-save-energy"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Fossil Resources</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-hydropower"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Maximize Green Resources</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-green-energy"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Future with Green Energy</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Service Section End =========-->
@endsection
