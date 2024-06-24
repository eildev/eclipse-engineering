@extends('frontend.frontend_master')
@section('content')
    @php
        // $aboutIntro = App\Models\AboutInroduction::all()->first();
        $about = App\Models\AboutSettings::latest()->first();
        $overview = App\Models\Overview::all()->take(2);
        $overview2 = App\Models\Overview::all()->skip(2)->take(1)->first();
        // dd($about);
    @endphp
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/about-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">About Us</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>About Us</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    <!--=========== About Section Start =========-->
    <section class="tj-about-section mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="about-content-one">
                        <div class="tj-sec-heading">
                            <span class="sub-title">About Us</span>
                            <h2 class="sec-title">
                                {{ $about->title ?? 'Our Mission Is To Make Solar' }}
                            </h2>
                            <div class="desc">
                                <p>
                                    {{-- @php
                                        $limitText = Str::limit(strip_tags($about->description), 250, ' ....');
                                    @endphp --}}
                                    {!! $about->description !!}
                                </p>
                            </div>
                        </div>
                        {{-- <div class="fun-fact-area">
                            @if ($overview->count() > 0)
                                @foreach ($overview as $data)
                                    <div class="counter-item">
                                        <div class="about-icon">
                                            <i class="flaticon-{{ $data->icon_name }}"></i>
                                        </div>
                                        <div class="counter-number">
                                            <div class="tj-count">
                                                <span class="odometer"
                                                    data-count="{{ $data->experience ?? '14000' }}">{{ $data->experience ?? '0' }}</span>+
                                            </div>
                                            <span class="sub-title">{{ $data->title ?? 'Installed Capacity' }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="counter-item">
                                    <div class="about-icon">
                                        <i class="flaticon-solar-panel-1"></i>
                                    </div>
                                    <div class="counter-number">
                                        <div class="tj-count">
                                            <span class="odometer" data-count="14000">0</span>+
                                        </div>
                                        <span class="sub-title">Installed Capacity</span>
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="about-icon">
                                        <i class="flaticon-solar-cell"></i>
                                    </div>
                                    <div class="counter-number">
                                        <div class="tj-count"><span class="odometer" data-count="70">0</span>%</div>
                                        <span class="sub-title">Save World</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="tj-about-button d-flex">
                            <a class="tj-primary-btn btn" href="{{ route('frontend.about') }}">
                                Read More <i class="flaticon-right-arrow"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="about-image-group">
                        <div class="about-lg-image">
                            <img src="{{ $about->image ? asset('uploads/about/' . $about->image) : asset('frontend/assets/images/about/about-1.jpg') }}"
                                alt="">
                            {{-- <img src="{{ asset('frontend') }}/assets/images/about/about-1.jpg" alt="Image" /> --}}
                            <div class="about-circle">
                                <div class="video-play">
                                    <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                        <i class="fa-solid fa-play"></i>
                                        <svg class="shape-1" viewBox="0 0 100 100" width="150" height="100">
                                            <defs>
                                                <path id="circle" d="
                                                                      M 50, 50
                                                                      m -37, 0
                                                                      a 37,37 0 1,1 74,0
                                                                      a 37,37 0 1,1 -74,0" />
                                            </defs>
                                            <text font-size="16">
                                                <textPath xlink:href="#circle" class="shape-1">
                                                    Eclipse Engineering Limited.
                                                </textPath>
                                            </text>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="about-experience">
                            <div class="about-icon">
                                <i class="flaticon-{{ $overview2->icon_name ?? 'experience-1' }}"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer"
                                        data-count="{{ $overview2->experience ?? '25' }}">{{ $overview2->experience ?? '25' }}</span>+
                                </div>
                                <span class="sub-title">{{ $overview2->title ?? 'Years Experience' }}</span>
                            </div>
                            <div class="about-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-shape">
            <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
        </div>
    </section>
    <!--=========== About Section End =========-->
    <!--=========== Value Section Start =========-->
    @include('frontend.indexContent2.value')
    <!--=========== Value Section End =========-->
    <!--=========== Counter Section Start =========-->
    @include('frontend.indexContent.counter')
    <!--=========== Counter Section End =========-->
@endsection
