 <!--=========== Sister Concern Start =========-->
 @php
     $sisterConcern = \App\Models\SisterConcern::latest()->take(3)->get();
 @endphp
 <section class="tj-service-section-three">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="tj-sec-heading-three text-center">
                     <span class="sub-title">Our Sister Concern</span>
                     <h2 class="title">
                         Top-Tier Solar Panel
                         <span>Service Providers</span>
                     </h2>
                 </div>
             </div>
         </div>
         <div class="row">
             @if ($sisterConcern->count() > 0)
                 @foreach ($sisterConcern as $sister)
                     <div class="col-lg-4 col-md-6">
                         <div class="service-item-four">
                             <h3 class="title">{{ $sister->name }}</h3>
                             <div class="desc">
                                 <p>
                                     {{-- @php
                                         $limitText = Str::limit(strip_tags($sister->description), 250, ' ....');
                                     @endphp --}}
                                     {!! $sister->description !!}
                                 </p>
                             </div>
                             {{-- <div class="check-list">
                                 <ul class="dot-style">
                                     <li>
                                         <span><i class="fa-light fa-check"></i></span>New Solar Installation
                                     </li>
                                     <li>
                                         <span><i class="fa-light fa-check"></i></span>Battery & Pannels
                                     </li>
                                     <li>
                                         <span><i class="fa-light fa-check"></i></span>Wind Customize
                                     </li>
                                 </ul>
                             </div> --}}
                             <div class="service-image">
                                 <img src="{{ $sister->logo ? asset('uploads/sister-concern/' . $sister->logo) : asset('frontend/assets/images/service/service-5.jpg') }}"
                                     alt="Images" />
                             </div>
                             <div class="read-more-button">
                                 <a class="read-more" href="service-details.html">Read More <i
                                         class="flaticon-right-arrow"></i></a>
                             </div>
                         </div>
                     </div>
                 @endforeach
             @else
                 <div class="col-lg-4 col-md-6">
                     <div class="service-item-four">
                         <h3 class="title">Panels <span>Settings</span></h3>
                         <div class="desc">
                             <p>
                                 It is a long established fact that a reader will be distracted by the readable content
                                 of a
                                 page when looking at its
                                 layout.
                             </p>
                         </div>
                         <div class="check-list">
                             <ul class="dot-style">
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>New Solar Installation
                                 </li>
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>Battery & Pannels
                                 </li>
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>Wind Customize
                                 </li>
                             </ul>
                         </div>
                         <div class="service-image">
                             <img src="{{ asset('frontend') }}/assets/images/service/service-5.jpg" alt="Images" />
                         </div>
                         <div class="read-more-button">
                             <a class="read-more" href="service-details.html">Read More <i
                                     class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="service-item-four">
                         <h3 class="title">Solar <span>Installations</span></h3>
                         <div class="desc">
                             <p>
                                 It is a long established fact that a reader will be distracted by the readable content
                                 of a
                                 page when looking at its
                                 layout.
                             </p>
                         </div>
                         <div class="check-list">
                             <ul class="dot-style">
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>New Solar Installation
                                 </li>
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>Battery & Pannels
                                 </li>
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>Wind Customize
                                 </li>
                             </ul>
                         </div>
                         <div class="service-image">
                             <img src="{{ asset('frontend') }}/assets/images/service/service-6.jpg" alt="Images" />
                         </div>
                         <div class="read-more-button">
                             <a class="read-more" href="service-details.html">Read More <i
                                     class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="service-item-four">
                         <h3 class="title">Solar <span>Maintaince</span></h3>
                         <div class="desc">
                             <p>
                                 It is a long established fact that a reader will be distracted by the readable content
                                 of a
                                 page when looking at its
                                 layout.
                             </p>
                         </div>
                         <div class="check-list">
                             <ul class="dot-style">
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>New Solar Installation
                                 </li>
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>Battery & Pannels
                                 </li>
                                 <li>
                                     <span><i class="fa-light fa-check"></i></span>Wind Customize
                                 </li>
                             </ul>
                         </div>
                         <div class="service-image">
                             <img src="{{ asset('frontend') }}/assets/images/service/service-7.jpg" alt="Images" />
                         </div>
                         <div class="read-more-button">
                             <a class="read-more" href="service-details.html">Read More <i
                                     class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
             @endif

         </div>
     </div>
     <div class="sec-shape-1">
         <img src="{{ asset('frontend') }}/assets/images/shape/service-shape-1.svg" alt="Shape" />
     </div>
     <div class="sec-shape-2">
         <img src="{{ asset('frontend') }}/assets/images/shape/service-shape-2.svg" alt="Shape" />
     </div>
     <div class="sec-shape-3">
         <img src="{{ asset('frontend') }}/assets/images/shape/service-shape-3.svg" alt="Shape" />
     </div>
     <div class="sec-shape-4">
         <img src="{{ asset('frontend') }}/assets/images/shape/service-shape-4.svg" alt="Shape" />
     </div>
 </section>
 <!--=========== Sister Concern End =========-->
