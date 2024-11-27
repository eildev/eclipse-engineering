@extends('frontend.frontend_master')
@section('content')
    @php
        // $aboutIntro = App\Models\AboutInroduction::all()->first();
        $about = App\Models\AboutSettings::where('status', 1)->latest()->first();
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
                                    @php
                                        if ($about && $about->description) {
                                            $limitText = Str::limit(strip_tags($about->description), 250, ' ....');
                                        } else {
                                            $limitText = 'Welcome to Eclipse Engineering Ltd. (EEL), a distinguished engineering, trading, and consulting company specializing in the power sector. Since our establishment in 2013, we have been at the forefront of delivering innovative and reliable solutions across Bangladesh, with our headquarters situated in Dhaka.

Our independence is our strength; ensuring that our services remain unbiased and focused solely on the best interests of our clients. We pride ourselves on offering bespoke solutions tailored to the unique needs of every power sector project we undertake.

At EEL, our dedication to quality, reliability, and innovation has fostered steady growth in our client base. Our reputation for excellence ensures that our clients continually seek our expertise, relying on us for consistent, high-quality service from their very first engagement.

To sustain our high standards, we invest in advanced skill-based courses and comprehensive health & safety training for our employees. We also extend some of these training sessions to our partners and trusted contractors, ensuring that our entire network remains at the cutting edge of industry knowledge and practice.

Though we operate with a core team of highly skilled employees, our flexible structure allows us to rapidly expand in both numbers and expertise to meet the demands of individual projects. This adaptability ensures that we can provide the precise skills and resources needed for any challenge in the power sector.

Thank you for considering Eclipse Engineering Ltd. as your partner in power and energy sector based projects. We look forward to collaborating with you and driving success through our commitment to excellence.';
                                        }
                                    @endphp
                                    {!! $limitText !!}
                                </p>
                            </div>
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
                                                    Eclipse Engineering Limited.
                                                </textPath>
                                            </text>
                                        </svg>
                                    </a>
                                </div>
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
    <!--=========== Value Section Start =========-->
    @include('frontend.indexContent2.value')
    <!--=========== Value Section End =========-->
    <!--=========== Counter Section Start =========-->
    @include('frontend.indexContent.counter')
    <!--=========== Counter Section End =========-->
@endsection
