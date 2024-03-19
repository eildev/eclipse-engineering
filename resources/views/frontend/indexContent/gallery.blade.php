 @php
     $galleries = App\Models\ManagingTeams::latest()->limit(6)->get();
     //  dd($galleries->count());
 @endphp

 @if ($galleries->count() > 0)
     <section class="tj-gallery-section">
         <div class="container-fluid p-0">
             <div class="widget_gallery popup-gallery">
                 <div class="swiper tj-gallery-slider">
                     <div class="swiper-wrapper">
                         @foreach ($galleries as $gallery)
                             {{-- @dd($gallery->gallery_image); --}}
                             <div class="swiper-slide">
                                 <a class="tj-gallery-item"
                                     href="{{ asset('frontend') }}/assets/images/gallery/gallery-6.jpg">
                                     <div class="image-box"
                                         data-bg-image="{{ $gallery->gallery_image ? asset('uploads/gallery/' . $gallery->gallery_image) : asset('frontend/assets/images/gallery/gallery-1.jpg') }}">
                                         <div class="gallery-icon">
                                             <i class="fa-regular fa-plus"></i>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                         @endforeach
                     </div>
                     <div class="gallery-navigation">
                         <div class="swiper-button-next"></div>
                         <div class="swiper-button-prev"></div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @else
     <section class="tj-gallery-section">
         <div class="container-fluid p-0">
             <div class="widget_gallery popup-gallery">
                 <div class="swiper tj-gallery-slider">
                     <div class="swiper-wrapper">
                         <div class="swiper-slide">
                             <a class="tj-gallery-item"
                                 href="{{ asset('frontend') }}/assets/images/gallery/gallery-6.jpg">
                                 <div class="image-box"
                                     data-bg-image="{{ asset('frontend') }}/assets/images/gallery/gallery-1.jpg">
                                     <div class="gallery-icon">
                                         <i class="fa-regular fa-plus"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="swiper-slide">
                             <a class="tj-gallery-item"
                                 href="{{ asset('frontend') }}/assets/images/gallery/gallery-7.jpg">
                                 <div class="image-box"
                                     data-bg-image="{{ asset('frontend') }}/assets/images/gallery/gallery-2.jpg">
                                     <div class="gallery-icon">
                                         <i class="fa-regular fa-plus"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="swiper-slide">
                             <a class="tj-gallery-item"
                                 href="{{ asset('frontend') }}/assets/images/gallery/gallery-8.jpg">
                                 <div class="image-box"
                                     data-bg-image="{{ asset('frontend') }}/assets/images/gallery/gallery-3.jpg">
                                     <div class="gallery-icon">
                                         <i class="fa-regular fa-plus"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="swiper-slide">
                             <a class="tj-gallery-item"
                                 href="{{ asset('frontend') }}/assets/images/gallery/gallery-9.jpg">
                                 <div class="image-box"
                                     data-bg-image="{{ asset('frontend') }}/assets/images/gallery/gallery-4.jpg">
                                     <div class="gallery-icon">
                                         <i class="fa-regular fa-plus"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="swiper-slide">
                             <a class="tj-gallery-item"
                                 href="{{ asset('frontend') }}/assets/images/gallery/gallery-10.jpg">
                                 <div class="image-box"
                                     data-bg-image="{{ asset('frontend') }}/assets/images/gallery/gallery-5.jpg">
                                     <div class="gallery-icon">
                                         <i class="fa-regular fa-plus"></i>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     </div>
                     <div class="gallery-navigation">
                         <div class="swiper-button-next"></div>
                         <div class="swiper-button-prev"></div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endif

 <!--=========== Gallery Section End =========-->
