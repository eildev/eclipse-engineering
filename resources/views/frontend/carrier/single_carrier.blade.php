@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/csr-activities.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Career Details</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Career Details</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    <!--=========== About Section Start =========-->
    <section class="tj-project-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-item">
                        <div class="project-image">
                            <img src="{{ $csr->image ? asset('uploads/carrier/' . $csr->image) : asset('frontend/assets/images/about/about-1.jpg') }}"
                                alt="Images" />
                        </div>
                        <h2 class="title"> {{ $csr->title ?? 'Our Mission Is To Make Solar' }}</h2>
                        <p>
                            {!! $csr->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== About Section End =========-->
@endsection
