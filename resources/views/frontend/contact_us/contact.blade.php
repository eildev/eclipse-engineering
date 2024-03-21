@extends('frontend.frontend_master')
@section('content')
    @php
        $footer = App\Models\FooterSetting::all()->first();
    @endphp
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/contact-banner.webp">
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
    <!--=========== Faq Section Start =========-->
    <section class="tj-faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-four text-center">
                        <span class="sub-title">Our FAQ</span>
                        <h2 class="sec-title">Frequently Asked <span>Question</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="ItemOne">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What is Included in your Services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What Warranties do I Have For Installation?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. How fast I get my Order?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. What are the advantages of solar energy?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#ItemOne">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="ItemTwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    5. How Much do Energy Panels Cost?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6. How Mech Energy Can a Solar Panel Generate?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    7. What are the advantages of solar energy?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. What is Included in your Services?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    9. Majority have do Energy Panels Cost?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#ItemTwo">
                                <div class="accordion-body">
                                    <strong>There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Faq Section End =========-->
@endsection
