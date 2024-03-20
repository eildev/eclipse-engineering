@php
    $services = App\Models\ServicesDetails::latest()->limit(6)->get();
    // dd($services);
    $ourService = App\Models\OurServices::latest()->first();
    // dd($ourService);
@endphp
<!--=========== Service Section Start =========-->
<section class="tj-service-section-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading-two">
                    <span class="sub-title">Our Services</span>
                    <h2 class="title">
                        {{ $ourService->services_title ?? 'Solar Renewable Services for' }}
                        <span>{{ $ourService->services_sub_title ?? 'A Greener World' }}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper tj-service-slider">
                    <div class="swiper-wrapper">
                        @if ($services->count() > 0)
                            @foreach ($services as $service)
                                <div class="swiper-slide">
                                    <div class="tj-service-item-three">
                                        <div class="service-image">
                                            <img src="{{ $service->services_details_image ? asset('uploads/services_image/' . $service->services_details_image) : asset('frontend/assets/images/service/service-1.jpg') }}"
                                                alt="Image" />
                                            <div class="service-icon">
                                                <i
                                                    class="flaticon-{{ $service->services_details_icon_name ?? 'environmental' }}"></i>
                                            </div>
                                        </div>
                                        <div class="service-content">
                                            <h5 class="title">
                                                <a
                                                    href="service-details.html">{{ $service->services_details_title ?? 'Hydropower Plants' }}</a>
                                            </h5>
                                            <div class="desc">
                                                <p>
                                                    @if ($service->services_details_description)
                                                        @php
                                                            $limitText = Str::limit(
                                                                strip_tags($service->services_details_description),
                                                                150,
                                                                ' ....',
                                                            );
                                                        @endphp
                                                        {!! $limitText !!}
                                                    @else
                                                        All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making words,
                                                    @endIf
                                                </p>
                                            </div>
                                            <div class="read-more">
                                                <a class="read-btn" href="service-details.html">Read More <i
                                                        class="flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-1.jpg"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-environmental"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title">
                                            <a href="service-details.html">Hydropower Plants</a>
                                        </h5>
                                        <div class="desc">
                                            <p>
                                                All the Lorem Ipsum generators on the Internet tend to repeat
                                                predefined chunks as necessary, making words,
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="service-details.html">Read More <i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-2.jpg"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-solar-energy-3"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title">
                                            <a href="service-details.html">Solar Panel Installation</a>
                                        </h5>
                                        <div class="desc">
                                            <p>
                                                All the Lorem Ipsum generators on the Internet tend to repeat
                                                predefined chunks as necessary, making words,
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="service-details.html">Read More <i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-3.jpg"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-save-energy"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title"><a href="#">Fossil Resources</a></h5>
                                        <div class="desc">
                                            <p>
                                                All the Lorem Ipsum generators on the Internet tend to repeat
                                                predefined chunks as necessary, making words,
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="service-details.html">Read More <i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="service-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Service Section End =========-->
