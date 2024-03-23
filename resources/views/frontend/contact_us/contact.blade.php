@extends('frontend.frontend_master')
@section('content')
    @php
        $footer = App\Models\FooterSetting::all()->first();
    @endphp
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/contact-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Contact Us</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Contact Us</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->


    <!-- Start Contact Us  Section -->
    @include('frontend.indexContent.contact_us')
    <!-- End Contact Us  Section -->
    <!--=========== Faq Section Start =========-->
    @include('frontend.indexContent.faq')
    <!--=========== Faq Section End =========-->
@endsection
