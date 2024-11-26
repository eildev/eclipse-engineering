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
        $projectCategory = App\Models\ProjectCategory::where('status', 1)->latest()->get();
        $projects = App\Models\ProjectDetails::latest()->get();
    @endphp

    <style>
        .filter-button.active {
            background: #29b2fb;
            color: #fff;
        }
    </style>

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

                <div class="d-flex justify-content-center align-items-center mb-4">
                    <button class="btn tj-transparent-btn filter-button me-2" data-filter="all">All Projects</button>
                    @forelse ($projectCategory as $category)
                        <button class="btn tj-transparent-btn filter-button me-2"
                            data-filter="{{ $category->slug ?? '' }}">{{ $category->name ?? '' }}</button>
                    @empty
                        <button class="btn tj-transparent-btn filter-button me-2" data-filter="renewable">Renewable
                            Energy</button>
                        <button class="btn tj-transparent-btn filter-button me-2" data-filter="design">Design &
                            Engineering</button>
                        <button class="btn tj-transparent-btn filter-button me-2" data-filter="substation">Substation
                            Solutions</button>  
                    @endforelse
                </div>
                <br>

                <div class="row">
                    @forelse ($projects as $project)
                        <div class="col-lg-4 col-md-6 filter {{ $project->projectCategory->slug }}">
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
                    @empty
                        <div class="col-lg-4 col-md-6 filter renewable">
                            <a href="#">
                                <div class="tj-process-item-two">
                                    <div class="process-images">
                                        <img src="{{ asset('frontend') }}/assets/images/project/process-1.webp"
                                            style="max-height: 240px; width: 100%; object-fit:cover;" />
                                    </div>
                                    <div class="process-content">
                                        <div class="process-icon">
                                            <i class="flaticon-environmental"></i>
                                        </div>
                                        <div class="process-title">
                                            <h6 class="title">Supply, Installation, Testing & Commissioning of 11 kW
                                                On-Grid Rooftop Solar System at Savar, Dhaka.</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 filter design">
                            <a href="#">
                                <div class="tj-process-item-two">
                                    <div class="process-images">
                                        <img src="{{ asset('frontend') }}/assets/images/project/process-2.webp"
                                            style="max-height: 240px; width: 100%; object-fit:cover;" />
                                    </div>
                                    <div class="process-content">
                                        <div class="process-icon">
                                            <i class="flaticon-renewable-energy"></i>
                                        </div>
                                        <div class="process-title">
                                            <h6 class="title">Supply, Installation, Testing & Commissioning of 119.9 kW
                                                On-Grid Rooftop Solar System at Neel Nagar Industries Ltd., at Mirzapur,
                                                South Keraniganj, Dhaka.</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 filter substation">
                            <a href="#">
                                <div class="tj-process-item-two">
                                    <div class="process-images">
                                        <img src="{{ asset('frontend') }}/assets/images/project/process-3.webp"
                                            style="max-height: 240px; width: 100%; object-fit:cover;" />
                                    </div>
                                    <div class="process-content">
                                        <div class="process-icon">
                                            <i class="flaticon-save-energy"></i>
                                        </div>
                                        <div class="process-title">
                                            <h6 class="title">Supply, Installation, Testing & Commissioning of 40.1 kW
                                                On-Grid Rooftop Solar System, Bangladesh JW Animal Protein Co., LTD.,
                                                Taksur, Savar, Dhaka, Bangladesh.</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 filter substation">
                            <a href="#">
                                <div class="tj-process-item-two">
                                    <div class="process-images">
                                        <img src="{{ asset('frontend') }}/assets/images/project/process-4-1.jpg"
                                            style="max-height: 240px; width: 100%; object-fit:cover;" />
                                    </div>
                                    <div class="process-content">
                                        <div class="process-icon">
                                            <i class="flaticon-green-power"></i>
                                        </div>
                                        <div class="process-title">
                                            <h6 class="title">Supply, Installation, Testing & Commissioning of 10 kW
                                                Off-Grid Hybrid Rooftop Solar System at Shahabuddin Memorial School and
                                                College, Beltia, Jamalpur Sadar, Jamalpur</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforelse
                </div>
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select all filter buttons
            const filterButtons = document.querySelectorAll(".filter-button");

            filterButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const value = this.getAttribute("data-filter");

                    if (value === "all") {
                        // Show all elements with the 'filter' class
                        document.querySelectorAll(".filter").forEach(item => {
                            item.style.display = "block";
                            item.style.transition = "all 1s";
                        });
                    } else {
                        // Hide elements that don't match the filter and show the ones that do
                        document.querySelectorAll(".filter").forEach(item => {
                            if (!item.classList.contains(value)) {
                                item.style.display = "none";
                                item.style.transition = "all 3s";
                            } else {
                                item.style.display = "block";
                                item.style.transition = "all 3s";
                            }
                        });
                    }

                    // Remove "active" class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove("active"));

                    // Add "active" class to the clicked button
                    this.classList.add("active");
                });
            });
        });
    </script>
@endsection
