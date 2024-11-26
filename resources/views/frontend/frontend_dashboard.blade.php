@extends('frontend.frontend_master')
@section('content')
    <!-- Start Solar Panel  slider Section -->
    @include('frontend.indexContent.slider')
    <!--End Solar Panel  slider Section  -->

    <!-- Start Solar Panel  About Section -->
    @include('frontend.indexContent.about')
    <!-- End Solar Panel  About Section -->

    <!-- Start Solar Panel  Service Section -->
    @include('frontend.indexContent2.service')
    <!-- End Solar Panel  Service Section -->

    <!-- Start Why chose Us Section -->
    @include('frontend.indexContent2.choose_us')
    <!-- End Why chose Us Section -->

    <!-- Start Solar Panel  Counter Section -->
    @include('frontend.indexContent2.counter')
    <!-- End Solar Panel  Counter Section -->

    <!-- Start Solar Panel  Process Section -->
    @include('frontend.indexContent.process')
    <!-- End Solar Panel  Process Section -->

    <!-- Start Solar Panel Team Section -->
    @include('frontend.indexContent.team')
    <!-- End Solar Panel Team Section -->

    <!-- Start Sister Concern  Section -->
    @include('frontend.indexContent.sister-concern')
    <!-- End Sister Concern Section -->

    <!-- Start Solar Panel Blog Section -->
    @include('frontend.indexContent.blog')
    <!-- End Solar Panel Blog Section -->

    <!-- Start Contact Us  Section -->
    @include('frontend.indexContent.contact_us')
    <!-- End Contact Us  Section -->
@endsection
