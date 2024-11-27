@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/about-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Career</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Career</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->

    @php
        $carrier = App\Models\Carrier::all();
    @endphp
    <!--=========== Blog Section Start =========-->
    <section class="tj-blog-section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-top-content-area">
                        <div class="tj-sec-heading-two">
                            <span class="sub-title">Engineering Career</span>
                            <h2 class="title">
                                Latest Job Post
                                <span>From EEL</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($carrier->count() > 0)
                    @foreach ($carrier as $key => $data)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="tj-blog-item-two">
                                <div class="blog-image">
                                    <a href="{{ route('carrier.details', $data->id) }}">
                                        <img src="{{ $data->image ? asset('uploads/carrier/' . $data->image) : asset('frontend/assets/images//blog/blog-4.jpg') }}"
                                            alt="Image" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="flaticon-calendar"></i>{{ $data->created_at }}</li>
                                            <li><i class="flaticon-user"></i> Admin</li>
                                        </ul>
                                    </div>
                                    <h5 class="title">
                                        <a href="{{ route('carrier.details', $data->id) }}">{{ $data->title ?? '' }}</a>
                                    </h5>
                                    <div class="tj-blog-button d-flex">
                                        <a class="tj-secondary-btn btn"
                                            href="{{ route('carrier.details', $data->id) }}">Read More <i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tj-blog-item-two">
                            <div class="blog-image">
                                <a href="#"><img
                                        src="http://127.0.0.1:8000/frontend/assets/images/blog/blog-77.jpg"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> Jan 5, 2023</li>
                                        <li><i class="flaticon-chat"></i> Comment (1)</li>
                                    </ul>
                                </div>
                                <h5 class="title">
                                    <a href="#">Winds of Change in the Tubine Service Industry</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="#">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tj-blog-item-two">
                            <div class="blog-image">
                                <a href="#"><img
                                        src="http://127.0.0.1:8000/frontend/assets/images/blog/blog88.jpg"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> Jan 5, 2023</li>
                                        <li><i class="flaticon-chat"></i> Comment (1)</li>
                                    </ul>
                                </div>
                                <h5 class="title">
                                    <a href="#">Winds of Change in the Tubine Service Industry</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="#">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tj-blog-item-two">
                            <div class="blog-image">
                                <a href="#"><img
                                        src="http://127.0.0.1:8000/frontend/assets/images/blog/blog-6.jpg"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> Jan 5, 2023</li>
                                        <li><i class="flaticon-chat"></i> Comment (1)</li>
                                    </ul>
                                </div>
                                <h5 class="title">
                                    <a href="#">Winds of Change in the Tubine Service Industry</a>
                                </h5>
                                <div class="tj-blog-button d-flex">
                                    <a class="tj-secondary-btn btn" href="#">Read More <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!--=========== Blog Section End =========-->
@endsection
