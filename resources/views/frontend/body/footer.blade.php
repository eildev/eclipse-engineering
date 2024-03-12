{{-- @php
    $footer = App\Models\FooterSetting::all()->first();
@endphp
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-wiget wow animate__zoomIn">
                    <div class="footer-wiget-log">
                        <!-- <a href="index.html"><img src="{{ asset('frontend') }}/assets/images/resource/footer-logo.png" alt=""></a> -->
                    </div>
                    <div class="footer-wiget-text">
                        <p style="text-align: justify;" >Zhejiang Huayun Electric Power Engineering Design & Consultation Co., Ltd. is dedicated to excellent design, customer satisfaction, and innovative development. 
                        We focus on creating resource-saving, environment-friendly projects.</p>
                    </div>
                    <div class="footer-wiget-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-wiget wow animate__slideInDown">
                    <div class="footer-wiget-title">
                        <h4>Quick Links</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                            <li><a href="{{ route('all.service') }}">Service list</a></li>
                            <li><a href="{{ route('all.project') }}">Project list</a></li>
                            <li><a href="{{ route('all.team') }}">Our Teams</a></li>
                            <li><a href="{{ route('contact.us') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-wiget-quick-contanct wow animate__slideInUp">
                    <div class="footer-wiget-title">
                        <h4>Get In Touch</h4>
                    </div>
                    <div class="footer-wiget-contact-menu">
                        <ul>
                            <li>{{ $footer->fullAddress ?? 'Valentin, Street Road 24, New York, USA - 67452' }}</li>
                            <li>{{ $footer->phone ?? '(+02) 574 - 328 - 30' }}</li>
                            <li>{{ $footer->email ?? 'example@gmail.com' }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="row footer-line">

        </div>
    </div>
</footer> --}}


<!--=========== Footer Area Start =========-->
<footer class="tj-footer-area">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer1-col-1">
                        <div class="footer-info">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('frontend') }}/assets/images/logos/main-logo.png"
                                        alt="Logo" /></a>
                            </div>
                            <div class="desc">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered.
                                </p>
                            </div>
                            <div class="footer-share">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget footer1-col-2 widget_nav_menu">
                        <div class="footer-title">
                            <h5 class="title">Links</h5>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Our Blog</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer1-col-3">
                        <div class="footer-title">
                            <h5 class="title">Contact Us</h5>
                        </div>
                        <div class="footer-contact">
                            <ul>
                                <li>
                                    <i class="flaticon-location"></i> 2972 Westheimer Rd. Santa Ana, Illinois
                                    937949
                                </li>
                                <li>
                                    <i class="flaticon-open"></i>
                                    <a href="mailto:solarplus@gmail.com">Solarplus@gmail.com </a>
                                    <a href="mailto:infosolarplus@gmail.com">infosolarplus@gmail.com</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i><a href="tel:(1234)5678900">(1234)-567-8900 </a>
                                    <a class="d-block" href="tel:1234567890000">123-456-7890000</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget footer1-col-4">
                        <div class="footer-title">
                            <h5 class="title">Newsletter</h5>
                        </div>
                        <div class="footer-newsletter">
                            <div class="desc">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered.
                                </p>
                            </div>
                            <div class="footer-form">
                                <input type="email" id="mail" name="email" placeholder="Enter your mail...." />
                                <a href="#"><i class="flaticon-sent"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tj-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content-ara">
                        <div class="copyright-text">
                            <p>
                                Copyright © 2023 <a href="#" target="_blank"> ThemeJunction. </a> All Rights
                                Reserved.
                            </p>
                        </div>
                        <div class="copyright-menu">
                            <ul>
                                <li><a href="#">Setting & Privacy</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section-shape">
        <div class="secton-group-one">
            <div class="shape-one">
                <img src="{{ asset('frontend') }}/assets/images/shape/footer-1.svg" alt="Shape" />
            </div>
            <div class="shape-two">
                <img src="{{ asset('frontend') }}/assets/images/shape/footer-2.svg" alt="Shape" />
            </div>
            <div class="shape-three">
                <img src="{{ asset('frontend') }}/assets/images/shape/footer-3.svg" alt="Shape" />
            </div>
            <div class="shape-four">
                <img src="{{ asset('frontend') }}/assets/images/shape/footer-4.svg" alt="Shape" />
            </div>
            <div class="shape-five">
                <img src="{{ asset('frontend') }}/assets/images/shape/footer-8.svg" alt="Shape" />
            </div>
        </div>
        <div class="secton-group-two">
            <div class="shape-one">
                <img class="image-1" src="{{ asset('frontend') }}/assets/images/shape/footer-5.svg" alt="Shape" />
                <img class="image-2" src="{{ asset('frontend') }}/assets/images/shape/footer-6.svg" alt="Shape" />
            </div>
            <div class="shape-two">
                <img class="image-1" src="{{ asset('frontend') }}/assets/images/shape/footer-5.svg" alt="Shape" />
                <img class="image-2" src="{{ asset('frontend') }}/assets/images/shape/footer-6.svg" alt="Shape" />
            </div>
        </div>
    </div>
</footer>
<!--=========== Footer Area End =========-->
