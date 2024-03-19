@extends('frontend.frontend_master')
@section('content')
    <section class="breadcrumb-wrapper"
        data-bg-image="{{ asset('frontend') }}/assets/images/banner/breadcrumb-background.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">404 Page</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>404 Page</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->


    <!--=========== Contact Section Start =========-->
    <div class="tj-contact-section tj-contact-page">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <img src="{{ asset('frontend') }}/assets/images/error/404.svg" alt="error image">
                </div>
            </div>
        </div>
    </div>
    <!--=========== Contact Section End =========-->
@endsection
