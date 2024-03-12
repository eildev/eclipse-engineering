{{-- @php
    $section = App\Models\Section::where('title', 'Experience')->first();
 
    $experience = App\Models\SectionDetails::where('section_id', $section->id)
        ->latest()
        ->limit(4)
        ->get();
    $experience1 = App\Models\SectionDetails::where('section_id', $section->id)
        ->latest()
        ->first();
@endphp
<div class="protfolio-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="section-title">
                    <div class="section-sub-title protfolio">
                        <h4>What We Project</h4>
                    </div>
                    <div class="section-main-title protfolio ">
                        <h2>{{ $experience[0]->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="solar-btn protfolio">
                    <a href="{{ route('all.project') }}">All Projects <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                $project_img = explode(',', $experience[0]->multi_image);
            @endphp
            <div class="col-lg-6 col-md-6">
                <div class="protfolio-thumb wow animate__zoomIn">
                    @if (isset($project_img[0]) && file_exists(public_path('uploads/multi_img/' . $project_img[0])))
                        <img src="{{ asset('uploads/multi_img/' . $project_img[0]) }}" width="598px" height="483px"
                            alt="">
                    @else
                        <img src="{{ asset('uploads/dummy.jpg') }}" width="598px" height="483px" alt="">
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-12">

                @foreach ($experience as $key => $project)
                    <a href="{{ route('project.details', $project->id) }}">
                        <div class="protfolio-item wow animate__slideInRight">
                            <div class="protfolio-item-content">
                                <div class="protfolio-item-numbar">
                                    <span>{{ $key + 1 }}</span>
                                </div>
                                <div class="protfolio-item-title">
                                    <h3>{{ Illuminate\Support\Str::limit($project->title, 20) }}</h3>
                                    <h3>{!! Illuminate\Support\Str::limit($project->description, 20) !!}</h3>
                                </div>
                            </div>
                            @php
                                // dd($project->multi_image);
                                $image = explode(',', $project->multi_image);
                                // dd($image[0]);
                            @endphp
                            <div class="protfolio-itme-hover">
                                <img src="{{ asset('uploads/multi_img/' . $image[0]) }}" width="174px" height="130px"
                                    alt="image">
                            </div>
                            <div class="protfolio-item-icon">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div> --}}

<!--=========== Project Section Start =========-->
<section class="tj-project-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-top-content-area">
                    <div class="tj-sec-heading-two">
                        <span class="sub-title">Latest Project</span>
                        <h2 class="title">
                            Solar Pushing Reanewable <br />
                            <span>Prohect Development</span>
                        </h2>
                    </div>
                    <div class="project-desc">
                        <p>
                            Lorem Ipsum has been the industry's standard text ever since the 1500s,
                            unchanged.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="tj-project-item">
                    <div class="project-image">
                        <img src="{{ asset('frontend') }}/assets/images/project/project-1.jpg" alt="Image" />
                        <div class="project-content">
                            <h3 class="title"><a href="project-details.html">Project Development</a></h3>
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
                            <h3 class="title"><a href="project-details.html">Project Development</a></h3>
                            <span class="sub-title">Soaring Renewal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tj-project-item">
                    <div class="project-image">
                        <img src="{{ asset('frontend') }}/assets/images/project/project-3.jpg" alt="Image" />
                        <div class="project-content">
                            <h3 class="title"><a href="project-details.html">Project Development</a></h3>
                            <span class="sub-title">Soaring Renewal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tj-project-item">
                    <div class="project-image">
                        <img src="{{ asset('frontend') }}/assets/images/project/project-4.jpg" alt="Image" />
                        <div class="project-content">
                            <h3 class="title"><a href="project-details.html">Project Development</a></h3>
                            <span class="sub-title">Soaring Renewal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Project Section End =========-->
