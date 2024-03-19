@php
    $slider = App\Models\HomeSlider::all()->take(3);
    $overview = App\Models\Overview::all()->take(3);
    // dd($slider);
@endphp
<!--=========== Slider Section Start =========-->
<section class="tj-slider-section">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            @if ($slider->count() > 0)
                @foreach ($slider as $data)
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
                @endforeach
            @else
                <div class="swiper-slide tj-slider-item">
                    <div class="slider-bg-image"
                        data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-1.jpg">
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
                    <div class="slider-bg-image"
                        data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-2.jpg">
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
                    <div class="slider-bg-image"
                        data-bg-image="{{ asset('frontend') }}/assets/images/banner/banner-3.jpg">
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
            @endif

        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="slider-sec-shape">
        <img src="{{ asset('frontend') }}/assets/images/shape/hero-shape.svg" alt="Shape" />
    </div>
    <div class="tj-service-item">
        <ul class="dot-style">
            @if ($overview->count() > 0)
                @foreach ($overview as $data)
                    <li>
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="flaticon-{{ $data->icon_name }}"></i>
                            </div>
                            <div class="service-text">
                                <h5 class="title">{{ $data->experience ?? '25' }}+</h5>
                                <span class="sub-title">{{ $data->title ?? 'Years Experience' }}</span>
                            </div>
                            <div class="item-shape">
                                <img src="{{ $data->icon ? asset('uploads/overview/' . $data->icon) : asset('frontend/assets/images/shape/service-1.svg') }}"
                                    alt="">
                            </div>
                        </div>
                    </li>
                @endforeach
            @else
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
            @endif

        </ul>
    </div>
</section>
<!--=========== Slider Section End =========-->
