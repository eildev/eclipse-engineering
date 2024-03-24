@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/about-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Why Choose Us</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Why Choose Us</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->

    @php
        $chooseUs = App\Models\WhyChooseUsDetails::latest()->get();
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
                            {{ $whyChooseUs->title ?? 'Benefits to Save' }}

                            <span>{{ $whyChooseUs->sub_title ?? 'Energy' }}</span>
                        </h2>
                        <div class="desc">
                            <p>
                                {{ $whyChooseUs->description ??
                                    'Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s,
                                                                                                                                                when an unknown printer took a galley of type unchanged.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($chooseUs->count() > 0)
                    @foreach ($chooseUs as $key => $data)
                        <div class="col-lg-6">
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
                                            {!! $data->description !!}
                                        @else
                                            It was popularised in the 1960s with the release of Letraset sheets containing.
                                        @endIf
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
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
                @endif
            </div>
        </div>
    </section>
    <!--=========== Choose-Us Section End =========-->


@endsection
