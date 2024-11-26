 @php
     $blogs = App\Models\News::latest()->take(3)->get();
 @endphp

 <!--=========== Blog Section Start =========-->
 <section class="tj-blog-section">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="blog-content-area">
                     <div class="tj-sec-heading-four">
                         <span class="sub-title">Recent Blog Article</span>
                         <h2 class="sec-title">Latest Story <span>From Blog</span></h2>
                     </div>
                     <div class="blog-desc">
                         <p>
                             Discover the Dynamic Minds Shaping Our Journey: Where Passion, Expertise, and Innovation
                             Converge to Drive Our Vision Forward.
                         </p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             @if ($blogs->count() > 0)
                 @foreach ($blogs as $blog)
                     <div class="col-lg-4 col-md-6">
                         <div class="tj-blog-item">
                             <div class="blog-image">
                                 <a href="{{ route('blog.details', $blog->id) }}">
                                     {{-- <img src="{{ asset('frontend') }}/assets/images/blog/blog-1.jpg" alt="Image" /> --}}
                                     <img src="{{ $blog->image ? asset('uploads/news/' . $blog->image) : asset('frontend/assets/images/blog/blog-1.jpg') }}"
                                         alt="Blog Image" style="max-height: 230px; object-fit:cover;">
                                 </a>
                             </div>
                             <div class="blog-meta">
                                 <ul class="d-flex justify-content-between  align-items-center">
                                     <li><i class="flaticon-calendar"></i> {{ $blog->created_at ?? 'Dec 1, 2023' }}
                                     </li>
                                     <li><i class="flaticon-user"></i> Admin</li>
                                 </ul>
                             </div>
                             <div class="blog-text-area">
                                 <div class="blog-content">
                                     <h5 class="title">
                                         <a
                                             href="{{ route('blog.details', $blog->id) }}">{{ $blog->title ? (strlen($blog->title) > 50 ? substr($blog->title, 0, 50) . '...' : $blog->title) : 'Winds of Change in the Turbine Service Industry' }}</a>
                                     </h5>
                                     <div class="tj-blog-button d-flex">
                                         <a class="tj-secondary-btn btn"
                                             href="{{ route('blog.details', $blog->id) }}">Read More <i
                                                 class="flaticon-right-arrow"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             @else
                 <div class="col-lg-4 col-md-6">
                     <div class="tj-blog-item">
                         <div class="blog-image">
                             <a href="blog-details.html"><img
                                     src="{{ asset('frontend') }}/assets/images/blog/blog-1.webp" style="height: 250px; object-fit:cover" alt="Image" /></a>
                         </div>
                         <div class="blog-text-area">
                             <div class="blog-meta">
                                 <ul>
                                     <li><i class="flaticon-calendar"></i> Dec 1, 2023</li>
                                     <li><i class="flaticon-user"></i> Admin</li>
                                 </ul>
                             </div>
                             <div class="blog-content">
                                 <h5 class="title">
                                     <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                                 </h5>
                                 <div class="tj-blog-button d-flex">
                                     <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                             class="flaticon-right-arrow"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="tj-blog-item">
                         <div class="blog-image">
                             <a href="blog-details.html"><img
                                     src="{{ asset('frontend') }}/assets/images/blog/blog-2.webp" style="height: 250px; object-fit:cover" alt="Image" /></a>
                         </div>
                         <div class="blog-text-area">
                             <div class="blog-meta">
                                 <ul>
                                     <li><i class="flaticon-calendar"></i> May 7, 2023</li>
                                     <li><i class="flaticon-user"></i> Admin</li>
                                 </ul>
                             </div>
                             <div class="blog-content">
                                 <h5 class="title">
                                     <a href="blog-details.html">Saw Scond Earth Do Grass Very Hot Wathers</a>
                                 </h5>
                                 <div class="tj-blog-button d-flex">
                                     <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                             class="flaticon-right-arrow"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="tj-blog-item">
                         <div class="blog-image">
                             <a href="blog-details.html"><img
                                     src="{{ asset('frontend') }}/assets/images/blog/blog-34.jpg" style="height: 250px; object-fit:cover" alt="Image" /></a>
                         </div>
                         <div class="blog-meta">
                             <ul class="d-flex justify-content-between  align-items-center">
                                 <li><i class="flaticon-calendar"></i> Jan 5, 2023</li>
                                 <li><i class="flaticon-user"></i> Admin</li>
                             </ul>
                         </div>
                         <div class="blog-text-area">
                             <div class="blog-content">
                                 <h5 class="title">
                                     <a href="blog-details.html">Heaced Maece Nasera Tortor Convallis Dise Ann
                                         Enget</a>
                                 </h5>
                                 <div class="tj-blog-button d-flex">
                                     <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                             class="flaticon-right-arrow"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             @endif

         </div>
     </div>
 </section>
 <!--=========== Blog Section End =========-->
