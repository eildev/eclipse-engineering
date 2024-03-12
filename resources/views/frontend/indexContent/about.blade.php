{{-- @php
    $aboutIntro = App\Models\AboutInroduction::all()->first();
    $about = App\Models\AboutSettings::all()->first();
    $testimonial = App\Models\Testimonial::all()->first();

    // dd($aboutIntro->all());
    // dd($aboutIntro->mission);

@endphp
<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="wow slideInLeft">
                    <div class="about-thumb">
                        <img src="{{ optional($about)->image ? asset('uploads/about/' . $about->image) : asset('uploads/dummy.jpg') }}"
                            alt="">

                        <div class="about-counter">
                            <div class="about-counter-text">
                                <div class="about-numbar">
                                    <h4 class="counter">37</h4>
                                    <span>+</span>
                                </div>
                                <div class="about-text">
                                    <h5>Years Exprience</h5>
                                </div>
                            </div>
                        </div>
                        <div class="about-counter-two d-flex align-items-center ">
                            <div class="about-counter-img">
                                <img src="{{ optional($testimonial)->image ? asset('uploads/testimonial/' . $testimonial->image) : asset('uploads/dummy.jpg') }}"
                                    alt="about image">


                            </div>
                            <div class="about-number-two">
                                <h4 class="counter">2900</h4>
                                <span>+</span>
                                <h5>Satisfied Clients</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-section-title">
                    <div class="about-section-sub-title wow slideInUp">
                        <h4>Our Introduction</h4>
                    </div>
                    <div class="about-section-main-title wow slideInRight">
                        <h2>{{ $about->title ?? 'Lorem Ipsum is simply dummy' }} </h2>
                    </div>
                </div>
                <!-- tab -->

                <!-- tab -->
                <div class="tab">
                    <ul class="tabs active wow slideInRight">
                        <li class="current"><a href="#">About Us <i class="bi bi-arrow-up-right"></i></a></li>
                        <li class=""><a href="#">Mission <i class="bi bi-arrow-up-right"></i></a></li>
                        <li class=""><a href="#">Vision <i class="bi bi-arrow-up-right"></i></a></li>
                    </ul> <!-- / tabs -->

                    <div class="tab_content">
                        <!-- / tabs_item -->
                        <div class="tabs_item" style="">
                            <div class="tabs-items-content">
                                <div class="about-content-discription wow slideInLeft">
                                    <p>
                                        {!! $aboutIntro->about ?? 'Lorem Ipsum is simply dummy about' !!}
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="solar-btn about wow slideInDown">
                                        <a href="{{ route('all.service') }}">Our Service <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tabs_item -->
                        <div class="tabs_item" style="display: none;">
                            <div class="tabs-items-content">
                                <div class="about-content-discription  slideInLeft">
                                    <p>
                                        {!! $aboutIntro->mission ?? 'Lorem Ipsum is simply dummy mission' !!}
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="solar-btn about wow slideInDown">
                                        <a href="{{ route('all.service') }}">Our Service <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tabs_item -->
                        <div class="tabs_item" style="display: none;">
                            <div class="tabs-items-content">
                                <div class="about-content-discription  slideInLeft">
                                    <p>
                                        {!! $aboutIntro->vision ?? 'Lorem Ipsum is simply dummy vission' !!}
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="solar-btn about  slideInDown">
                                        <a href="{{ route('all.service') }}">Our Service <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}
<!--=========== About Section Start =========-->
<section class="tj-about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-12">
                <div class="about-content-one">
                    <div class="tj-sec-heading">
                        <span class="sub-title">About Us</span>
                        <h2 class="sec-title">
                            Our Mission Is To Make Solar <br />
                            <span>Energy Accessible</span>
                        </h2>
                        <div class="desc">
                            <p>
                                It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using
                                Lorem Ipsum is that it has a more-or-less normal distribution of.
                            </p>
                        </div>
                    </div>
                    <div class="fun-fact-area">
                        <div class="counter-item">
                            <div class="about-icon">
                                <i class="flaticon-solar-panel-1"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count">
                                    <span class="odometer" data-count="14000">0</span>+
                                </div>
                                <span class="sub-title">Installed Capacity</span>
                            </div>
                        </div>
                        <div class="counter-item">
                            <div class="about-icon">
                                <i class="flaticon-solar-cell"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="70">0</span>%</div>
                                <span class="sub-title">Save World</span>
                            </div>
                        </div>
                    </div>
                    <div class="tj-about-button d-flex">
                        <a class="tj-primary-btn btn" href="about-us.html">
                            Read More <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="about-image-group">
                    <div class="about-lg-image">
                        <img src="{{ asset('frontend') }}/assets/images/about/about-1.jpg" alt="Image" />
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
                                                Solar Energy . Solar Energy .
                                            </textPath>
                                        </text>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="about-experience">
                        <div class="about-icon">
                            <i class="flaticon-experience-1"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="25">0</span>+</div>
                            <span class="sub-title">Years Experience</span>
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
