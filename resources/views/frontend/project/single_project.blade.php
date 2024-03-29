@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/project-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Project Details</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Project Details</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->

    <!--=========== Project Section Start =========-->
    <section class="tj-project-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-item">
                        <div class="project-image">
                            {{-- <img src="{{ asset('frontend') }}/assets/images/project/project-6.jpg" alt="Images" /> --}}
                            <img src="{{ $projectDetails->image ? asset('uploads/projects/multi_img/' . $projectDetails->image) : asset('frontend/assets/images/project/project-6.jpg') }}" alt="Images" />
                        </div>
                        <h2 class="title">{{ $projectDetails->title }}</h2>
                        <p>
                            {!! $projectDetails->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->
@endsection
