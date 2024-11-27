@php
    $chooseUs = App\Models\WhyChooseUsDetails::latest()->limit(3)->get();
    $whyChooseUs = App\Models\WhyChooseUs::latest()->first();
@endphp


<!--=========== Choose-Us Section Start =========-->
<section class="tj-choose-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading-two">
                    <span class="sub-title">Why Choose Us</span>
                    <h2 class="title">
                        {{ $whyChooseUs->title ?? 'Productivity Boosts from' }}
                        <span>{{ $whyChooseUs->sub_title ?? 'Efficiency' }}</span>
                    </h2>
                    <div class="desc">
                        <p>
                            {{ $whyChooseUs->description ?? 'Choose us for expertise, innovation, sustainability, client focus, and proven results. Your success is our priority.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($chooseUs->count() > 0)
                @foreach ($chooseUs as $key => $data)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tj-choose-us-item">
                            <div class="choose-us-top-content">
                                <div class="choose-us-icon">
                                    <i class="flaticon-{{ $data->icon ?? 'reliability' }}"></i>
                                </div>
                                <div class="choose-us-text">
                                    <span>{{ $key + 1 }}</span>
                                </div>
                            </div>
                            <h5 class="title">
                                {{ $data->title ?? 'Quality And Reliability' }}

                            </h5>
                            <div class="desc">
                                <p>
                                    @if ($data->description)
                                        @php
                                            $limitText = Str::limit(strip_tags($data->description), 250, ' ....');
                                        @endphp
                                        {!! $limitText !!}
                                    @else
                                        It was popularised in the 1960s with the release of Letraset sheets containing.
                                    @endIf
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-xl-4 col-lg-6 col-md-6">
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
                            Professional door to door logistics management
                        </h5>
                        <div class="desc">
                            <p>
                                We provide door-to-door delivery services for clients who wish to streamline logistics
                                administration, cut expenses, and decrease the risk of product loss or damage while
                                concentrating on their main business.
                            </p>
                        </div>
                        <div class="read-more">
                            <a class="read-btn" href="#">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tj-choose-us-item">
                        <div class="choose-us-top-content">
                            <div class="choose-us-icon">
                                <i class="flaticon-wind-energy"></i>
                            </div>
                            <div class="choose-us-text">
                                <span>02</span>
                            </div>
                        </div>
                        <h5 class="title">Dedicated to quality & authenticity, optional inspections ensure customer
                            satisfaction</h5>
                        <div class="desc">
                            <p>
                                We are experienced in various projects like transportation, water, power & energy as a
                                solution provider over 7 years.
                            </p>
                        </div>
                        <div class="read-more">
                            <a class="read-btn" href="#">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
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
                            Guarantees quality and authenticity, with optional inspection services
                        </h5>
                        <div class="desc">
                            <p>
                                We are dedicated to provide quality & authenticity with optional inspection services
                                for our customers satisfaction
                            </p>
                        </div>
                        <div class="read-more">
                            <a class="read-btn" href="#">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            @endif
            <div class="tj-about-button d-flex">
                <a class="tj-primary-btn btn" href="{{ route('choose-us.details') }}">
                    Read More <i class="flaticon-right-arrow"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!--=========== Choose-Us Section End =========-->
