@php
    $services = App\Models\ServicesDetails::latest()->limit(4)->get();
    // dd($services);
    $ourService = App\Models\OurServices::latest()->first();
    // dd($ourService);
@endphp

<!--=========== Service Section Start =========-->
<section class="tj-service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading text-center">
                    <span class="sub-title">Our Services</span>
                    <h2 class="sec-title">
                        {{ $ourService->services_title ?? 'Solar Renewable Services for' }}
                        <br />
                        <span>{{ $ourService->services_sub_title ?? 'A Greener World' }}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($services->count() > 0)
                @foreach ($services as $service)
                    <div class="col-lg-6">
                        <div class="tj-service-item-two">
                            <div class="service-icon-box">
                                <div class="service-icon hover-shape-border">
                                    <i
                                        class="flaticon-{{ $service->services_details_icon_name ?? 'environmental' }}"></i>
                                    <div class="icon-shape">
                                        <span class="border-shadow shadow-1"></span>
                                        <span class="border-shadow shadow-2"></span>
                                        <span class="border-shadow shadow-3"></span>
                                    </div>
                                </div>
                                <div class="item-shape">
                                    <img src="{{ $service->services_details_image ? asset('uploads/services_image/' . $service->services_details_image) : asset('frontend/assets/images/shape/shape-1.svg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a
                                        href="service-details.html">{{ $service->services_details_title ?? 'Hydropower Plants' }}</a>
                                </h4>
                                <div class="desc">
                                    <p>
                                        @php
                                            $limitText = Str::limit(
                                                strip_tags($service->services_details_description),
                                                150,
                                                ' ....',
                                            );
                                        @endphp
                                        {!! $limitText !!}
                                    </p>
                                </div>
                                <div class="read-more">
                                    <a class="link" href="{{ route('service.details', $service->id) }}">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-environmental"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Hydropower Plants</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-save-energy"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Fossil Resources</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-hydropower"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Maximize Green Resources</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-service-item-two">
                        <div class="service-icon-box">
                            <div class="service-icon hover-shape-border">
                                <i class="flaticon-green-energy"></i>
                                <div class="icon-shape">
                                    <span class="border-shadow shadow-1"></span>
                                    <span class="border-shadow shadow-2"></span>
                                    <span class="border-shadow shadow-3"></span>
                                </div>
                            </div>
                            <div class="item-shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/shape-1.svg" alt="Shape" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="title"><a href="service-details.html">Future with Green Energy</a></h4>
                            <div class="desc">
                                <p>
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making words,
                                </p>
                            </div>
                            <div class="read-more">
                                <a class="link" href="service-details.html">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!--=========== Service Section End =========-->
