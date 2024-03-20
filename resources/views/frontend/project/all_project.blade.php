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
    @php
        $projects = App\Models\Projects::latest()->get();
    @endphp
    <!--=========== Project Section Start =========-->
    <section class="tj-project-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-two">
                        <span class="sub-title">Latest Project</span>
                        <h2 class="title">
                            Solar Pushing Reanewable <br />
                            <span>Prohect Development</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('frontend') }}/assets/images/project/project-1.jpg" alt="Image" />
                            <div class="project-content">
                                <h3 class="title"><a href="#">Project Development</a></h3>
                                <span class="sub-title">Soaring Renewal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('frontend') }}/assets/images/project/project-2.jpg" alt="Image" />
                            <div class="project-content">
                                <h3 class="title"><a href="#">Project Development</a></h3>
                                <span class="sub-title">Soaring Renewal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('frontend') }}/assets/images/project/project-8.jpg" alt="Image" />
                            <div class="project-content">
                                <h3 class="title"><a href="#">Project Development</a></h3>
                                <span class="sub-title">Soaring Renewal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('frontend') }}/assets/images/project/project-9.jpg" alt="Image" />
                            <div class="project-content">
                                <h3 class="title"><a href="#">Project Development</a></h3>
                                <span class="sub-title">Soaring Renewal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('frontend') }}/assets/images/project/project-10.jpg" alt="Image" />
                            <div class="project-content">
                                <h3 class="title"><a href="#">Project Development</a></h3>
                                <span class="sub-title">Soaring Renewal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('frontend') }}/assets/images/project/project-11.jpg" alt="Image" />
                            <div class="project-content">
                                <h3 class="title"><a href="#">Project Development</a></h3>
                                <span class="sub-title">Soaring Renewal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-project-item">
                        <div class="project-image">
                            <img src="{{ asset('frontend') }}/assets/images/project/project-12.jpg" alt="Image" />
                            <div class="project-content">
                                <h3 class="title"><a href="#">Project Development</a></h3>
                                <span class="sub-title">Soaring Renewal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->
@endsection
