@extends('frontend.frontend_master')
@section('content')
    @php
        $footer = App\Models\FooterSetting::all()->first();
    @endphp
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper"
        data-bg-image="{{ asset('frontend') }}/assets/images/banner/breadcrumb-background.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Contact Us</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Contact Us</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->

    <!--==================================================-->
    <!-- Start Solar Panel  Contact Us Section -->
    <!--==================================================-->

    {{-- <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-title">
                        <div class="contact-sub-title ">
                            <h4> Contact Wlth Us</h4>
                        </div>
                        <div class="contact-main-title">
                            <h2>Get In Touch!</h2>
                        </div>
                        <div class="contact-discription">
                            <p>Get in Touch! Contact with us Get in Touch! Contact with us</p>
                        </div>
                    </div>
                    <div class="contact-box-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-adress">
                            <h5>Address</h5>
                            <span>{{ $footer->fullAddress ?? 'Lorem Ipsum is simply dummy' }}</span>
                        </div>
                    </div>
                    <div class="contact-box-item">
                        <div class="contact-icon">
                            <i class="bi bi-phone-flip"></i>
                        </div>
                        <div class="contact-adress">
                            <h5>Call Us Today</h5>
                            <span>{{ $footer->phone ?? 'Lorem Ipsum is simply dummy' }}</span>
                        </div>
                    </div>
                    <div class="contact-box-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-adress">
                            <h5>Email Us</h5>
                            <span>{{ $footer->email ?? 'example@gmail.com' }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="choose-contact-box contact-inner">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box contact-inner">
                                        <input type="text" name="name" placeholder="Full Name*" required>
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box contact-inner">
                                        <input type="email" name="email" placeholder="Email Address*" required>
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box contact-inner">
                                        <input type="text" name="phone" placeholder="Phone Number*" required>
                                        <i class="bi bi-phone-flip"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="service_name" placeholder="Enter Service Name*"
                                            required>
                                        <i class="bi bi-pencil-square"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box contact-inner">
                                        <input type="text" name="company_name" placeholder="Your Company Name*" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-box contact-inner">
                                        <textarea name="message" id="massage" cols="30" rows="10" placeholder="Write your question here*"></textarea>
                                        <i class="bi bi-chat-left-text-fill"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-box-button contact-inner">
                                        <button type="Submit">Send Messages</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!--=========== Contact Section Start =========-->
    <div class="tj-contact-section tj-contact-page mb-5 ">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="contact-left-content">
                        <div class="tj-sec-heading-two">
                            <span class="sub-title">For A New World</span>
                            <h2 class="title">
                                Let’s Make
                                <span>Some Change</span>
                            </h2>
                            <div class="desc">
                                <p>
                                    These cases are perfectly simple and easy to distinguish. In a free hour,
                                    when and when avoided.
                                </p>
                            </div>
                            <div class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.2273120048374!2d90.43589712215075!3d23.760320991417355!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7f588575549%3A0xd3c9ea7a0d43894d!2s5%20Banasree%20Main%20Rd!5e0!3m2!1sen!2sus!4v1710387400191!5m2!1sen!2sus"
                                    style="border:0;" allowfullscreen=""></iframe>
                                {{-- <iframe
                                    src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                    style="border: 0" allowfullscreen=""></iframe> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-contact-form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <input type="text" id="nameOne" name="name" placeholder="Your Name...."
                                            required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <input type="text" id="phone" name="phone" placeholder="Phone..."
                                            required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <input type="email" id="emailTwo" name="email" placeholder="Enter your Email"
                                            required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <input type="text" id="site" name="company_name"
                                            placeholder="Enter Company Name" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input">
                                        <textarea id="message" name="message" placeholder="Write Here...."></textarea>
                                    </div>
                                </div>
                                <div class="tj-contact-button">
                                    <button class="tj-primary-btn2 btn" type="submit">
                                        Contact Us <i class="flaticon-right-arrow"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Contact Section End =========-->
@endsection
