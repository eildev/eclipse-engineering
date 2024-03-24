<!--=========== Process Section Start =========-->
@php
    $ourProjects = App\Models\Projects::latest()->first();
    $projects = App\Models\ProjectDetails::latest()->take(3)->get();
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
                            <div class="tj-process-item">
                                <img src="{{ $project->image ? asset('uploads/projects/multi_img/' . $project->image) : asset('frontend/assets/images/project/process-1.jpg') }}"
                                    alt="Project Image" style="max-height: 240px; object-fit:cover;">
                                <div class="process-content">
                                    <div class="process-icon">
                                        <i class="flaticon-{{ $project->icon_name ?? 'renewable-energy' }}"></i>
                                    </div>
                                    <div class="process-title">
                                        <h5 class="title">{{ $project->title ?? 'Carbon Offsetting' }}</h5>
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
