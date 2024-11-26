@php
    $slider = App\Models\HomeSlider::all()->take(3);
    $overview = App\Models\Overview::all()->take(3);
    // dd($slider);
@endphp
<!--=========== Slider Section Start =========-->
<section class="tj-slider-section">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            @forelse($slider as $data)
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image"
                        data-bg-image="{{ $data->slider_image ? asset('uploads/slider_image/' . $data->slider_image) : asset('frontend/assets/images/banner/banner-1.jpg') }}">
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">{{ $data->short_title ?? 'Harnessing The Wind' }}</h1>
                            <h2 class="slider-sub-title">{{ $data->sub_title ?? 'And Sun For Future' }}</h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        {!! $data->long_title
                                            ? (strlen($data->long_title) > 200
                                                ? substr($data->long_title, 0, 200) . '...'
                                                : $data->long_title)
                                            : 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered form, passage.' !!}
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="{{ $data->slider_links ?? '#' }}">
                                        Read More <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image"
                        data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-4.webp">
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">Empowering Tomorrow with</h1>
                            <h2 class="slider-sub-title">Eclipse Engineering Limited</h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        Our comprehensive service portfolio includes renewable energy solutions like
                                        solar and wind power, energy efficiency upgrades, operation & maintenance
                                        services, logistics support, supply and tradin...
                                    </p>
                                </div>
                                <div class="slider-button d-flex">
                                    <a class="tj-transparent-btn btn" href="#">
                                        Read More <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image"
                        data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-5.webp">
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">Powering the Future</h1>
                            <h2 class="slider-sub-title">Eclipse Engineering Limited</h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        At Eclipse Engineering LTD, we're passionate about building a greener future.
                                        With over 11 years of experience, we provide comprehensive renewable energy,
                                        energy efficiency, and consulting services...

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
                    <div class="slider-bg-image"
                        data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-6.webp">
                    </div>
                    <div class="container">
                        <div class="slider-content">
                            <h1 class="slider-title">Experience the best with</h1>
                            <h2 class="slider-sub-title">Eclipse Engineering Limited</h2>
                            <div class="slider-text">
                                <div class="desc">
                                    <p>
                                        With over 11 years in the industry, Eclipse Engineering LTD has a proven track
                                        record of success. We leverage our experience to deliver exceptional results and
                                        ensure your project runs smoothly, fr...

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
            @endforelse
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="slider-sec-shape">
        <img src="{{ asset('frontend') }}/assets/images/shape/hero-shape.svg" alt="Shape" />
    </div>
</section>
<!--=========== Slider Section End =========-->
