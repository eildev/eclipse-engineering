{{-- @php
    $seviceDetails = App\Models\ServicesDetails::latest()->limit(6)->get();
@endphp
<div class="service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="section-sub-title wow animate__fadeOutDown">
                        <h4>Our Most Service</h4>
                    </div>
                    <div class="section-main-title wow slideInLeft">
                        <h2>Provide Solar Solution</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($seviceDetails as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-box wow animate__backInLeft">
                        <div class="service-thumb">
                            <img src="{{ asset('uploads/services_image/' . $service->services_details_image) }}"
                                height="338" width="438" alt="service">
                            <div class="service-content"
                                style="background-image: url({{ asset('frontend/uploads/servie-hover.png') }})!important;">
                                <div class="service-icon-thumb">
                                    <img src="{{ asset('uploads/services_image/' . $service->services_details_icon) }}"
                                        height="50" width="46" alt="">
                                </div>
                                <div class="service-text">
                                    <h4><a
                                            href="{{ route('service.details', $service->id) }}">{!! substr(strip_tags($service->services_details_title), 0, 20) ?? 'Lorem Ipsum is simply dummy' !!}</a>
                                    </h4>
                                    <p><a href="{{ route('service.details', $service->id) }}">{!! Str::limit(strip_tags($service->services_details_description), 65, '...') ?? 'Lorem Ipsum is simply dummy' !!}</a>
                                    </p>
                                    <a href="{{ route('service.details', $service->id) }}">Read More <i
                                            class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div> --}}
<!--=========== Service Section Start =========-->
<section class="tj-service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading text-center">
                    <span class="sub-title">Our Services</span>
                    <h2 class="sec-title">
                        Solar Renewable Services for <br />
                        <span>A Greener World</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
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
        </div>
    </div>
</section>
<!--=========== Service Section End =========-->
