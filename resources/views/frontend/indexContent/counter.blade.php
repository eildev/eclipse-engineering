 <!--=========== Counter Section Start =========-->
 @php
     $overview = App\Models\Overview::all()->take(4);
 @endphp
 <section class="tj-counter-section">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-4 col-md-5">
                 <div class="counter-content-area">
                     @if ($overview->count() > 0)
                         @foreach ($overview as $data)
                             <div class="counter-item-two">
                                 <div class="counter-icon">
                                     <i class="flaticon-{{ $data->icon_name }}"></i>
                                 </div>
                                 <div class="counter-number">
                                     <div class="tj-count"><span class="odometer"
                                             data-count="{{ $data->experience ?? '48' }}">{{ $data->experience ?? '0' }}</span>+
                                     </div>
                                     <span class="sub-title">{{ $data->title ?? 'Years Experience' }}</span>
                                 </div>
                             </div>
                         @endforeach
                     @else
                         <div class="counter-item-two">
                             <div class="counter-icon">
                                 <i class="flaticon-experience"></i>
                             </div>
                             <div class="counter-number">
                                 <div class="tj-count"><span class="odometer" data-count="48">0</span>+</div>
                                 <span class="sub-title">Years Experience</span>
                             </div>
                         </div>
                         <div class="counter-item-two">
                             <div class="counter-icon">
                                 <i class="flaticon-completed-task"></i>
                             </div>
                             <div class="counter-number">
                                 <div class="tj-count"><span class="odometer" data-count="239">0</span>+</div>
                                 <span class="sub-title">Projects Completed</span>
                             </div>
                         </div>
                         <div class="counter-item-two">
                             <div class="counter-icon">
                                 <i class="flaticon-customer-service"></i>
                             </div>
                             <div class="counter-number">
                                 <div class="tj-count"><span class="odometer" data-count="230">0</span>+</div>
                                 <span class="sub-title">Happy Customers</span>
                             </div>
                         </div>
                         <div class="counter-item-two">
                             <div class="counter-icon">
                                 <i class="flaticon-timeline"></i>
                             </div>
                             <div class="counter-number">
                                 <div class="tj-count"><span class="odometer" data-count="380">0</span>+</div>
                                 <span class="sub-title">Awards Milestones</span>
                             </div>
                         </div>
                     @endif
                 </div>
             </div>
             <div class="col-lg-8 col-md-7">
                 <div class="counter-wrapper">
                     <img src="{{ asset('frontend') }}/assets/images/project/counter-1.jpg" alt="Image" />
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--=========== Counter Section End =========-->
