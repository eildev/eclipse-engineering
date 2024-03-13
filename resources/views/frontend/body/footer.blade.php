<!--=========== Footer Area Start =========-->
@php
    $footer = App\Models\FooterSetting::all()->first();
    // dd($footer);
    $social = App\Models\SocialIcon::all()->take(4);
@endphp

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
                                        @if ($social->count() > 0)
                                            @foreach ($social as $data)
                                                <a href="{{ $data->link }}"><i
                                                        class="fa-brands fa-x-{{ $data->name }}"></i></a>
                                            @endforeach
                                        @else
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        @endif
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
                                <li><a href="{{ route('/') }}">Home</a></li>
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
                                    <i class="flaticon-location"></i>
                                    {{ $footer->fullAddress ??
                                        "2972 Westheimer Rd. Santa Ana, Illinois
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                937949" }}
                                </li>
                                <li>
                                    <i class="flaticon-open"></i>
                                    <a href="mailto:solarplus@gmail.com">
                                        {{ $footer->email ?? 'Solarplus@gmail.com' }}</a>
                                    <a href="mailto:infosolarplus@gmail.com">infosolarplus@gmail.com</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i><a href="tel:(1234)5678900">
                                        {{ $footer->phone ?? '(1234)-567-8900' }}
                                    </a>
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
                            <form class="footer-form">
                                @csrf
                                <input type="email" id="mail" name="email" placeholder="Enter your mail...." />
                                <a href="#" class="subscribe"><i class="flaticon-sent"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tj-copyright-area">
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


<script>
    const btn = document.querySelector('.subscribe');
    btn.addEventListener('click', function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let email = document.querySelector('#mail').value;
        $.ajax({
            url: '/subscribe',
            type: 'POST',
            data: {
                'email': email,
            },
            success: function(res) {
                if (res.status == 200) {
                    toastr.success(res.message);
                    document.querySelector('#mail').value = '';
                } else {
                    toastr.warning(res.error.email);
                }
            }
        });
    });
</script>
<!--=========== Footer Area End =========-->
