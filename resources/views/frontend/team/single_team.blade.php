@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/team-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Team Details</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Team Details</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    <!--=========== Team Details Start =========-->
    <section class="tj-about-section mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="about-content-one">
                        <div class="tj-sec-heading">
                            {{-- <span class="sub-title">About Us</span> --}}
                            <h2 class="sec-title">
                                {{ $teamDetails->name ?? 'Our Mission Is To Make Solar' }}
                                <br />
                                <span>{{ $teamDetails->designation ?? 'Energy Accessible' }}</span>
                            </h2>
                            <div class="desc">
                                <p>
                                    {!! $teamDetails->full_discription !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="about-image-group">
                        <div class="about-lg-image">
                            <img src="{{ $teamDetails->image ? asset('uploads/managing_team/' . $teamDetails->image) : asset('frontend/assets/images/about/about-1.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details-share">
                <ul class="dot-style">
                    <li><span>Connect with:</span></li>
                    <li>
                        <a href="{{ $teamDetails->twitter ?? '#' }}"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li>
                        <a href="{{ $teamDetails->linkedin ?? '#' }}"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="{{ $teamDetails->instagram ?? '#' }}"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="{{ $teamDetails->facebook ?? '#' }}"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sec-shape">
            <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
        </div>

    </section>
    <!--=========== Team Details End =========-->
@endsection
