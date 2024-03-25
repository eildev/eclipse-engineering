@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/services-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Services Details</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Services Details</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->

    @php
        $services = App\Models\ServicesDetails::latest()->limit(10)->get();
    @endphp

    <!--==================================================-->
    <!-- Start Solar Panel  Service Section -->
    <!--==================================================-->
    <section class="tj-service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-item">
                        <div class="details-image">
                            <img src="{{ $data->services_details_image ? asset('uploads/services_image/' . $data->services_details_image) : asset('frontend/assets/images/project/project-5.jpg') }}"
                                alt="Image" />
                        </div>
                        <h2 class="title">{{ $data->services_details_title ?? 'Hydro Powerplants' }}</h2>
                        <p>
                            {!! $data->services_details_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-service-widget">
                            <h3 class="side-title">All Service</h3>
                            <div class="sidebar-catagory">
                                <ul>
                                    @if ($services->count() > 0)
                                        @foreach ($services as $service)
                                            <li>
                                                <a href="{{ route('service.details', $service->id) }}">{{ $service->services_details_title }}
                                                    <span> <i class="fa-light fa-angle-right"></i></span>
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <a href="#">Energy Planning
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Cutting Sector
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Consumer Sector
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Steel Sector
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                        {{-- <div class="tj-service-widget">
                            <h3 class="side-title">Download</h3>
                            <div class="sidebar-download">
                                <ul>
                                    <li>
                                        <a href="#">Company Profile
                                            <span> <i class="flaticon-download"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Zip. Download
                                            <span> <i class="flaticon-download"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="tj-service-widget">
                            <div class="sidebar-contact">
                                <div class="contact-text">
                                    <div class="contact-icon">
                                        <img src="{{ asset('frontend') }}/assets/images/icon/phone.svg" alt="Icon" />
                                    </div>
                                    <div class="contact-title">
                                        <h3 class="title">Need Help?</h3>
                                    </div>
                                </div>
                                <a href="tel:(+88)01718319480">(+88) 01718319480 </a>
                                <p>
                                    We believe communication preferences should be made by the customer, not by the
                                    merchant. For this reason, we’re accessible by any of your preferred methods; phone,
                                    email, text, instant messenger, and even in-person meets. Our publicly listed number is
                                    an office line that may go to voicemail or answering service afterhours, but when you’re
                                    a client of ours, you’ll have the CEO’s cell phone number.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End Solar Panel  Service Section -->
    <!--==================================================-->
@endsection
