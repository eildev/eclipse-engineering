@php
    $about = App\Models\AboutSettings::latest()->first();
    $overview = App\Models\Overview::all()->take(2);
    $overview2 = App\Models\Overview::all()->skip(2)->take(1)->first();
@endphp
<!--=========== About Section Start =========-->
<section class="tj-about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-12">
                <div class="about-content-one">
                    <div class="tj-sec-heading">
                        <span class="sub-title">About Us</span>
                        <h2 class="sec-title">
                            {{ $about->title ?? 'Eclipse Engineering Ltd.' }}
                        </h2>
                        <div class="desc">
                            <p>
                                @php
                                    if ($about && $about->description) {
                                        $limitText = Str::limit(strip_tags($about->description), 250, ' ....');
                                    } else {
                                        $limitText =
                                            'Welcome to Eclipse Engineering Ltd. (EEL), a distinguished engineering, trading, and consulting company specializing in the power sector. Since our establishment in 2013, we have been at the forefront of delivering innovative and reliable solu ....';
                                    }
                                @endphp
                                {!! $limitText !!}
                            </p>
                        </div>
                    </div>
                    <div class="tj-about-button d-flex">
                        <a class="tj-primary-btn btn" href="{{ route('frontend.about') }}">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="about-image-group">
                    <div class="about-lg-image">
                        <img src="{{ $about && $about->image && file_exists(public_path('uploads/about/' . $about->image))
                            ? asset('uploads/about/' . $about->image)
                            : asset('frontend/assets/images/about/about-7.webp') }}"
                            alt="">
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
                                                Eclipse Engineering Limited .
                                            </textPath>
                                        </text>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="about-experience">
                        <div class="about-icon">
                            <i class="flaticon-{{ $overview2->icon_name ?? 'experience-1' }}"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer"
                                    data-count="{{ $overview2->experience ?? '11' }}">{{ $overview2->experience ?? '25' }}</span>+
                            </div>
                            <span class="sub-title">{{ $overview2->title ?? 'Years Experience' }}</span>
                        </div>
                        <div class="about-shape">
                            <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec-shape">
        <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
    </div>
</section>
<!--=========== About Section End =========-->
