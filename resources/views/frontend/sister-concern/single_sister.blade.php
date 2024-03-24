@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/sister-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Sister Concern Details</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Sister Concern Details</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    <!--=========== Sister Details Start =========-->
    <section class="tj-about-section mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="about-content-one">
                        <div class="tj-sec-heading">
                            {{-- <span class="sub-title">About Us</span> --}}
                            <h2 class="sec-title">
                                {{ $sister->name ?? 'Our Mission Is To Make Solar' }}
                            </h2>
                            <div class="desc">
                                <p>
                                    {!! $sister->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="about-image-group">
                        <div class="about-lg-image">
                            <img src="{{ $sister->logo ? asset('uploads/sister-concern/' . $sister->logo) : asset('frontend/assets/images/about/about-1.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-shape">
            <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
        </div>

    </section>
    <!--=========== Sister Details End =========-->
@endsection
