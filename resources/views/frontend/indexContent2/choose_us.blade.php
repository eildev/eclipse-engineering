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
            <div class="tj-about-button d-flex w-25 m-auto">
                <a class="tj-primary-btn btn" href="{{ route('choose-us.details') }}">
                    Read More <i class="flaticon-right-arrow"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!--=========== Choose-Us Section End =========-->
