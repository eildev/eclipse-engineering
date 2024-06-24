@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/project-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Our Project</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Our Project</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    <!--=========== Process Section Start =========-->
    @php
        $ourProjects = App\Models\Projects::latest()->first();
        $projects = App\Models\ProjectDetails::latest()->get();
    @endphp
    <section class="tj-process-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Our Working Process</span>
                        <h2 class="sec-title">
                            {{ $ourProjects->title ?? 'Inspiring Interiors Exceptional' }}
                            <br />
                            <span>{{ $ourProjects->sub_title ?? 'Of Experiences' }}</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($projects->count() > 0)
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route('project.details', $project->id) }}">
                                <div class="tj-process-item-two">
                                    <div class="process-images">
                                        <img src="{{ $project->image ? asset('uploads/projects/multi_img/' . $project->image) : asset('frontend/assets/images/project/process-1.jpg') }}"
                                            style="max-height: 240px; width: 100%; object-fit:cover;" />
                                    </div>
                                    <div class="process-content">
                                        <div class="process-icon">
                                            <i class="flaticon-{{ $project->icon_name ?? 'renewable-energy' }}"></i>
                                        </div>
                                        <div class="process-title">
                                            <h6 class="title">{{ $project->title ?? 'Carbon Offsetting' }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-4 col-md-6">
                        <div class="tj-process-item">
                            <img src="{{ asset('frontend') }}/assets/images/project/process-1.jpg" alt="Image" />
                            <div class="process-content">
                                <div class="process-icon">
                                    <i class="flaticon-renewable-energy"></i>
                                </div>
                                <div class="process-title">
                                    <h5 class="title">Carbon Offsetting</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tj-process-item">
                            <img src="{{ asset('frontend') }}/assets/images/project/process-2.jpg" alt="Image" />
                            <div class="process-content">
                                <div class="process-icon">
                                    <i class="flaticon-quality"></i>
                                </div>
                                <div class="process-title">
                                    <h5 class="title">Research & Analysis</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tj-process-item">
                            <img src="{{ asset('frontend') }}/assets/images/project/process-3.jpg" alt="Image" />
                            <div class="process-content">
                                <div class="process-icon">
                                    <i class="flaticon-solar-energy-2"></i>
                                </div>
                                <div class="process-title">
                                    <h5 class="title">Renewable Energy</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
    <!--=========== Process Section End =========-->

    <!-- Start Solar Panel  Work  Section -->
    @include('frontend.indexContent2.work')
    <!-- End Solar Panel  Work  Section -->
    <!-- Start Solar Panel  Choose Us  Section -->
    @include('frontend.indexContent.gallery')
    <!-- End Solar Panel  Choose Us  Section -->
@endsection
