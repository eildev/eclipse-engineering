{{-- @php
    $slider = App\Models\HomeSlider::latest()->get();
@endphp

<div class="slider-list owl-carousel">
    @foreach ($slider as $slide)
        <div class="slider-section d-flex align-items-center"
            style="background-image: url({{ asset('uploads/slider_image/' . $slide->slider_image) }})!important;">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="slider-content wow animate__zoomIn">
                            <img src="" alt="">
                            <h1>

                                @php
                                    $title = $slide->short_title;
                                    $length = strlen($title);
                                    $breakPoint = 19;

                                    for ($i = 0; $i < $length; $i += $breakPoint) {
                                        echo substr($title, $i, $breakPoint) . '<br>';
                                    }
                                @endphp
                            </h1>
                            <p>{!! $slide->long_title !!}</p>
                            <div class="solar-btn slider1 wow slideInLeft">
                                <a href="{{ route('all.service') }}">Our Service <i class="bi bi-arrow-right"></i></a>
                            </div>
                            <div class="solar-btn slider2  wow slideRight">
                                <a href="{{ route('frontend.about') }}">More About! <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div> --}}
<!--=========== Slider Section Start =========-->
<section class="tj-slider-section">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide tj-slider-item">
                <div class="slider-bg-image" data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-1.jpg">
                </div>
                <div class="container">
                    <div class="slider-content">
                        <h1 class="slider-title">Harnessing The Wind</h1>
                        <h2 class="slider-sub-title">And Sun <span>For Future</span></h2>
                        <div class="slider-text">
                            <div class="desc">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered form, passage.
                                </p>
                            </div>
                            <div class="slider-button d-flex">
                                <a class="tj-transparent-btn btn" href="contact.html">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide tj-slider-item">
                <div class="slider-bg-image" data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-2.jpg">
                </div>
                <div class="container">
                    <div class="slider-content">
                        <h1 class="slider-title">Harnessing The Wind</h1>
                        <h2 class="slider-sub-title">And Sun <span>For Future</span></h2>
                        <div class="slider-text">
                            <div class="desc">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered form, passage.
                                </p>
                            </div>
                            <div class="slider-button d-flex">
                                <a class="tj-transparent-btn btn" href="contact.html">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide tj-slider-item">
                <div class="slider-bg-image" data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-3.jpg">
                </div>
                <div class="container">
                    <div class="slider-content">
                        <h1 class="slider-title">Harnessing The Wind</h1>
                        <h2 class="slider-sub-title">And Sun <span>For Future</span></h2>
                        <div class="slider-text">
                            <div class="desc">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered form, passage.
                                </p>
                            </div>
                            <div class="slider-button d-flex">
                                <a class="tj-transparent-btn btn" href="contact.html">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="slider-sec-shape">
        <img src="{{ asset('frontend') }}/assets/images/shape/hero-shape.svg" alt="Shape" />
    </div>
    <div class="tj-service-item">
        <ul class="dot-style">
            <li>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="flaticon-solar-panel"></i>
                    </div>
                    <div class="service-text">
                        <h5 class="title">Number #1</h5>
                        <span class="sub-title">Best Renewable Solar</span>
                    </div>
                    <div class="item-shape">
                        <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
                    </div>
                </div>
            </li>
            <li>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="flaticon-solar-energy"></i>
                    </div>
                    <div class="service-text">
                        <h5 class="title">3,480+mw</h5>
                        <span class="sub-title">Installed Will Capacity</span>
                    </div>
                    <div class="item-shape">
                        <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
                    </div>
                </div>
            </li>
            <li>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="flaticon-battery"></i>
                    </div>
                    <div class="service-text">
                        <h5 class="title">25900+</h5>
                        <span class="sub-title">Total WTGS Installed</span>
                    </div>
                    <div class="item-shape">
                        <img src="{{ asset('frontend') }}/assets/images/shape/service-1.svg" alt="Shape" />
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--=========== Slider Section End =========-->
