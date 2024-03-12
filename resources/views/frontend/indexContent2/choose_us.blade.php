{{-- @php
    $chooseUs = App\Models\WhyChooseUsDetails::latest()->limit(4)->get();
    $whyChooseUs = App\Models\WhyChooseUs::latest()->limit(1)->first();
@endphp
<div class="offer-section style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="section-title wow animate__slideInDown">
                    <div class="section-sub-title offer">
                        <h4>{{ $whyChooseUs->title }}</h4>
                    </div>
                    <div class="section-main-title offer">
                        <h2>{{ $whyChooseUs->sub_title }}</h2>
                    </div>
                </div>
                <div class="row inner">
                    @if (!empty($chooseUs))
                        @foreach ($chooseUs as $choose)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="offer-items-box wow animate__slideInRight">
                                    <div class="offer-icon-thumb">
                                        @if (!empty($choose->icon))
                                            <img src="{{ asset('uploads/why-choose-us/' . $choose->icon) }}"
                                                alt="">
                                        @else
                                            <img src="{{ asset('frontend') }}/assets/images/resource/offer-icon1.png"
                                                alt="">
                                        @endif
                                    </div>
                                    <div class="offer-content">
                                        @if (!empty($choose->title))
                                            <h4>{{ Illuminate\Support\Str::limit($choose->title, 20) }}</h4>
                                        @else
                                            <h4>Energy Around</h4>
                                        @endif

                                        @if (!empty($choose->description))
                                            <p>{!! Illuminate\Support\Str::limit(strip_tags($choose->description), 20) !!}</p>
                                        @else
                                            <p>Solar PV, Battery Storage Heat Recovery</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="offer-items-box wow animate__slideInRight">
                                <div class="offer-icon-thumb">
                                    <img src="{{ asset('frontend') }}/assets/images/resource/offer-icon1.png"
                                        alt="">
                                </div>
                                <div class="offer-content">
                                    <h4>Battery Storage</h4>
                                    <p>Solar PV, Battery Storage
                                        Heat Recovery </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="offer-items-box wow animate__slideInLeft">
                                <div class="offer-icon-thumb">
                                    <img src="{{ asset('frontend') }}/assets/images/resource/offer-icon2.png"
                                        alt="">
                                </div>
                                <div class="offer-content">
                                    <h4>Energy Around</h4>
                                    <p>Solar PV, Battery Storage
                                        Heat Recovery </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="offer-items-box">
                                <div class="offer-icon-thumb wow animate__slideInRight">
                                    <img src="{{ asset('frontend') }}/assets/images/resource/offer-icon3.png"
                                        alt="">
                                </div>
                                <div class="offer-content wow animate__slideInDown">
                                    <h4>Solar PV Systems</h4>
                                    <p>Solar PV, Battery Storage
                                        Heat Recovery </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="offer-items-box">
                                <div class="offer-icon-thumb wow animate__slideInUp">
                                    <img src="{{ asset('frontend') }}/assets/images/resource/offer-icon4.png"
                                        alt="">
                                </div>
                                <div class="offer-content wow animate__slideInLeft">
                                    <h4>Technical Service</h4>
                                    <p>Solar PV, Battery Storage
                                        Heat Recovery </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="offer-items-box wow animate__zoomIn">
                                <div class="offer-icon-thumb">
                                    <img src="{{ asset('frontend') }}/assets/images/resource/offer-icon5.png"
                                        alt="">
                                </div>
                                <div class="offer-content">
                                    <h4>Wind Generators</h4>
                                    <p>Solar PV, Battery Storage
                                        Heat Recovery </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="offer-items-box wow animate__slideInDown">
                                <div class="offer-icon-thumb">
                                    <img src="{{ asset('frontend') }}/assets/images/resource/offer-icon6.png"
                                        alt="">
                                </div>
                                <div class="offer-content">
                                    <h4>Inspection skill</h4>
                                    <p>Solar PV, Battery Storage
                                        Heat Recovery </p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-lg-5 col-md-12 pl-0">
                <div class="offer-thumb wow animate__slideInUp">
                    @if (!empty($chooseUs[0]->image))
                        <img src="{{ asset('uploads/why-choose-us/details/' . $chooseUs[0]->image) }}" alt="">
                    @else
                        <img src="{{ asset('frontend') }}/assets/img/image" alt="">
                    @endif

                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--=========== Choose-Us Section Start =========-->
<section class="tj-choose-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading-two">
                    <span class="sub-title">Why Choose Us</span>
                    <h2 class="title">
                        Benefits to Save
                        <span>Energy</span>
                    </h2>
                    <div class="desc">
                        <p>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type unchanged.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="tj-choose-us-item">
                    <div class="choose-us-top-content">
                        <div class="choose-us-icon">
                            <i class="flaticon-reliability"></i>
                        </div>
                        <div class="choose-us-text">
                            <span>01</span>
                        </div>
                    </div>
                    <h5 class="title">
                        Quality And <br />
                        Reliability
                    </h5>
                    <div class="desc">
                        <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing.
                        </p>
                    </div>
                    <div class="read-more">
                        <a class="read-btn" href="#">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="tj-choose-us-item">
                    <div class="choose-us-top-content">
                        <div class="choose-us-icon">
                            <i class="flaticon-wind-energy"></i>
                        </div>
                        <div class="choose-us-text">
                            <span>02</span>
                        </div>
                    </div>
                    <h5 class="title">Expertise in Renewable Solutions</h5>
                    <div class="desc">
                        <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing.
                        </p>
                    </div>
                    <div class="read-more">
                        <a class="read-btn" href="#">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="tj-choose-us-item">
                    <div class="choose-us-top-content">
                        <div class="choose-us-icon">
                            <i class="flaticon-customize"></i>
                        </div>
                        <div class="choose-us-text">
                            <span>03</span>
                        </div>
                    </div>
                    <h5 class="title">
                        Customized <br />
                        Solution
                    </h5>
                    <div class="desc">
                        <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing.
                        </p>
                    </div>
                    <div class="read-more">
                        <a class="read-btn" href="#">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="tj-choose-us-item">
                    <div class="choose-us-top-content">
                        <div class="choose-us-icon">
                            <i class="flaticon-green-power"></i>
                        </div>
                        <div class="choose-us-text">
                            <span>04</span>
                        </div>
                    </div>
                    <h5 class="title">
                        Environmental <br />
                        Impact
                    </h5>
                    <div class="desc">
                        <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing.
                        </p>
                    </div>
                    <div class="read-more">
                        <a class="read-btn" href="#">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Choose-Us Section End =========-->
