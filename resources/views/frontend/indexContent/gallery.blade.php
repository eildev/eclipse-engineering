 @php
     $galleries = App\Models\Gallery::latest()->get();
     //  dd($galleries->count());
 @endphp
 <!--=========== Gallery Section Start =========-->
 <section class="tj-gallery-section">
     <div class="container-fluid p-0">
         <div class="widget_gallery popup-gallery">
             <div class="swiper tj-gallery-slider">
                 <div class="swiper-wrapper">
                     @if ($galleries->count() > 0)
                         @foreach ($galleries as $gallery)
                             <div class="swiper-slide">
                                 <a class="tj-gallery-item"
                                     href="{{ $gallery->gallery_image ? asset('uploads/gallery/' . $gallery->gallery_image) : asset('frontend/assets/images/gallery/gallery-6.jpg') }}">
                                     <div class="image-box"
                                         data-bg-image="{{ $gallery->gallery_image ? asset('uploads/gallery/' . $gallery->gallery_image) : asset('frontend/assets/images/gallery/gallery-6.jpg') }}">
                                         <div class="gallery-icon">
                                             <i class="fa-regular fa-plus"></i>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                         @endforeach
                     @else
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
                     @endif

                 </div>
                 <div class="gallery-navigation">
                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--=========== Gallery Section End =========-->
