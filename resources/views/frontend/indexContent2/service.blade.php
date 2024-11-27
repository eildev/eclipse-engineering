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
                        {{ $ourService->services_title ?? 'Comprehensive suite of services designed to meet the diverse needs' }}
                        <span>{{ $ourService->services_sub_title ?? 'of our customers' }}</span>
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
                                                    href="{{ route('service.details', $service->id) }}">{{ $service->services_details_title ?? 'Hydropower Plants' }}</a>
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
                                                <a class="read-btn"
                                                    href="{{ route('service.details', $service->id) }}">Read More <i
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
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-1.webp"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-energy"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title">
                                            <a href="#">Energy Efficiency</a>
                                        </h5>
                                        <div class="desc">
                                            <p>
                                                Eclipse Engineering Ltd. is committed to helping clients achieve their
                                                sustainability goals. Our energy efficiency services identify and
                                                impleme ....
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="#">Read More<i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-2.webp"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-mission"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title">
                                            <a href="#">Logistics Services</a>
                                        </h5>
                                        <div class="desc">
                                            <p>
                                                Eclipse Engineering Ltd. offers comprehensive logistics solutions to
                                                support your engineering projects. We handle the critical task of moving
                                                eq ....
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="#">Read More <i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-3.webp"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-targeting"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title"><a href="#">Supply/Trading</a></h5>
                                        <div class="desc">
                                            <p>
                                                Eclipse Engineering Ltd. is your one-stop shop for procuring the
                                                equipment and materials needed for your engineering projects. We
                                                leverage our e ....
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="#">Read More <i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-4.webp"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-continuous-improvement"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title"><a href="#">Engineering Consulting Services</a></h5>
                                        <div class="desc">
                                            <p>
                                                Eclipse Engineering Ltd. offers a wide range of engineering consulting
                                                services to support your projects from conception to completion. Our
                                                team of e ....
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="#">Read More <i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-5.webp"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-renewable-energy"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title"><a href="#">Renewable Energy</a></h5>
                                        <div class="desc">
                                            <p>

                                                Eclipse Engineering Ltd. is a leader in providing renewable energy
                                                solutions. We help clients harness clean, sustainable energy sources to
                                                power thei ....

                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="#">Read More <i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset('frontend') }}/assets/images/service/service-6.webp"
                                            alt="Image" />
                                        <div class="service-icon">
                                            <i class="flaticon-technician"></i>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="title"><a href="#">Operation & Maintenance (O&M)</a></h5>
                                        <div class="desc">
                                            <p>
                                                Eclipse Engineering Ltd. is dedicated to optimizing industrial processes
                                                through digital asset management solutions. Our services ensure seamless
                                                inte ....
                                            </p>
                                        </div>
                                        <div class="read-more">
                                            <a class="read-btn" href="#">Read More <i
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
