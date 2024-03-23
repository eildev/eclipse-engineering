@extends('frontend.frontend_master')
@section('content')
    <!--=========== Breadcrumb Start =========-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend') }}/assets/images/banner/news-banner.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title">Blog Details</h1>
                        </div>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <i class="fa-light fa-angle-right"></i>
                            <span>
                                <span>Blog Details</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Breadcrumb End =========-->
    @php
        $sideBlog = App\Models\News::latest()->take(7)->get();
    @endphp
    <!--=========== Blog Details Start =========-->
    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sidebar-wrapper">
                        <div class="details-item details-item-two">
                            <div class="blog-thumb-image">
                                <a href="#"><img
                                        src="{{ $blog->image ? asset('uploads/news/' . $blog->image) : asset('frontend/assets/images/blog/blog-7.jpg') }}"
                                        alt="Image" /></a>
                            </div>
                            <div class="blog-meta-two">
                                <ul class="d-flex justify-content-between align-items-center">
                                    <li><i class="flaticon-calendar"></i> {{ $blog->created_at ?? 'Dec 1, 2023' }}
                                    </li>
                                    <li><i class="fa-light fa-users"></i> <a href="#">Admin</a></li>
                                </ul>
                            </div>
                            <div class="details-title">
                                <h2 class="title">{{ $blog->title ?? '' }}</h2>
                            </div>
                            <p>
                                {!! $blog->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" name="search" id="searchTwo" placeholder="Search Here" />
                                    <button type="submit" value="search">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Recent Post</h3>
                            <div class="sidebar-recent-post">
                                @if ($sideBlog->count() > 0)
                                    @foreach ($sideBlog as $blog)
                                        <div class="single-post d-flex align-items-center">
                                            <div class="post-image">
                                                <a href="blog-details.html">
                                                    <img src="{{ $blog->image ? asset('uploads/news/' . $blog->image) : asset('frontend/assets/images/blog/blog-7.jpg') }}"
                                                        alt="Blog" /></a>
                                            </div>
                                            <div class="post-content">
                                                <div class="blog-meta">
                                                    <ul>
                                                        <li><i class="flaticon-calendar"></i> Jan 3,</li>
                                                        <li><i class="fa-light fa-users"></i> Admin</li>
                                                    </ul>
                                                </div>
                                                <h5 class="title-link">
                                                    <a href="#">{{ $blog->title ?? '' }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="single-post d-flex align-items-center">
                                        <div class="post-image">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('frontend') }}/assets/images/blog/post-3.jpg"
                                                    alt="Blog" /></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="flaticon-calendar"></i> Jan 3,</li>
                                                    <li><i class="flaticon-chat"></i> Comment</li>
                                                </ul>
                                            </div>
                                            <h5 class="title-link">
                                                <a href="#">Principle Stability in the future with activety</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="single-post d-flex align-items-center">
                                        <div class="post-image">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('frontend') }}/assets/images/blog/post-4.jpg"
                                                    alt="Blog" /></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="flaticon-calendar"></i> Nov 5,</li>
                                                    <li><i class="flaticon-chat"></i> Comment</li>
                                                </ul>
                                            </div>
                                            <h5 class="title-link">
                                                <a href="#">How to invent a law & Pass it in parliament</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="single-post d-flex align-items-center">
                                        <div class="post-image">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('frontend') }}/assets/images/blog/post-5.jpg"
                                                    alt="Blog" /></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="flaticon-calendar"></i> May 9,</li>
                                                    <li><i class="flaticon-chat"></i> Comment</li>
                                                </ul>
                                            </div>
                                            <h5 class="title-link">
                                                <a href="#">Illumination the path to a Sustainalble Future</a>
                                            </h5>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Popular Tag</h3>
                            <div class="sidebar-tags">
                                <div class="tagcloud">
                                    <a href="#">Engineering</a>
                                    <a href="#">Renewal</a>
                                    <a href="#">Solar</a>
                                    <a href="#">Solar Plans</a>
                                    <a href="#">Gosolar</a>
                                    <a href="#">Wheepup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Blog Details End =========-->
@endsection
