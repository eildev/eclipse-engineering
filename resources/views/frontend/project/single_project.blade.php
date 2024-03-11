@extends('frontend.frontend_master')
@section('content')
    <div class="breatcome-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breatcome-content">
                        <div class="breatcome-title">
                            <h1> Project Details</h1>
                        </div>
                        <div class="bratcome-text">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li> Project Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!--End Solar Panel  slider Section  -->
    <!--==================================================-->
    @php
        $image = explode(',', $projectDetails->multi_image);
    @endphp
    <!--==================================================-->
    <!-- Start Solar Panel  Priject Details  Section -->
    <!--==================================================-->
    <div class="project-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="projetct-details-image">
                        <img src="{{ asset('uploads/multi_img/' . $image[0]) }}" alt="project">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="info-area">
                        <div class="sub-title">
                            <h5>information</h5>
                        </div>
                        <ul class="info">
                            <li>
                                <h6>project name:</h6>
                                <p>{{ $projectDetails->title }}</p>
                            </li>
                            <li>
                                <h6>client:</h6>
                                <p>theme pvt ltd</p>
                            </li>
                            <li>
                                <h6>category:</h6>
                                <p>commercial</p>
                            </li>
                            <li>
                                <h6>delivery mode:</h6>
                                <p>in hand delivery</p>
                            </li>
                            <li>
                                <h6>location:</h6>
                                <p>USA</p>
                            </li>
                            <li>
                                <h6>share:</h6>
                                <ul class="d-flex">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 mt-5 ">
                    <p>{!! $projectDetails->desciption ?? 'Lorem Ipsum is simply dummy' !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
