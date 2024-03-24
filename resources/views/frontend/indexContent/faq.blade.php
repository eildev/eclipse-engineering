 <!--=========== Faq Section Start =========-->
 @php
     $faqs = App\Models\FAQ::take(4)->get();
     $faqs2 = App\Models\FAQ::skip(4)->take(4)->get();
    //  dd($faqs2->all());
 @endphp
 <section class="tj-faq-section">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="tj-sec-heading-four text-center">
                     <span class="sub-title">Our FAQ</span>
                     <h2 class="sec-title">Frequently Asked <span>Question</span></h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-6">
                 <div class="accordion" id="ItemOne">
                     @if ($faqs->count() > 0)
                         @foreach ($faqs as $key => $faq)
                             <div class="accordion-item">
                                 <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                     <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true"
                                         aria-controls="collapse{{ $faq->id }}">
                                         {{ $key + 1 }}. {{ $faq->question }}
                                     </button>
                                 </h2>
                                 <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                     aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#ItemOne">
                                     <div class="accordion-body">
                                         <strong>{!! $faq->description !!}</strong>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     @else
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     1. What is Included in your Services?
                                 </button>
                             </h2>
                             <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#ItemOne">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     2. What Warranties do I Have For Installation?
                                 </button>
                             </h2>
                             <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#ItemOne">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseThree" aria-expanded="false"
                                     aria-controls="collapseThree">
                                     3. How fast I get my Order?
                                 </button>
                             </h2>
                             <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#ItemOne">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingFour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                     4. What are the advantages of solar energy?
                                 </button>
                             </h2>
                             <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#ItemOne">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                     @endif
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="accordion" id="ItemTwo">
                     @if ($faqs2->count() > 0)
                         @foreach ($faqs2 as $key => $faq)
                             <div class="accordion-item">
                                 <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                     <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                         data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true"
                                         aria-controls="collapse{{ $faq->id }}">
                                         {{ $key + 5 }}. {{ $faq->question }}
                                     </button>
                                 </h2>
                                 <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                     aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#ItemOne">
                                     <div class="accordion-body">
                                         <strong>{!! $faq->description !!}</strong>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     @else
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingTen">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                     5. How Much do Energy Panels Cost?
                                 </button>
                             </h2>
                             <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                 data-bs-parent="#ItemTwo">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingSix">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                     6. How Mech Energy Can a Solar Panel Generate?
                                 </button>
                             </h2>
                             <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#ItemTwo">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingSeven">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseSeven" aria-expanded="false"
                                     aria-controls="collapseSeven">
                                     7. What are the advantages of solar energy?
                                 </button>
                             </h2>
                             <div id="collapseSeven" class="accordion-collapse collapse"
                                 aria-labelledby="headingSeven" data-bs-parent="#ItemTwo">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                         <div class="accordion-item">
                             <h2 class="accordion-header" id="headingEight">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseEight" aria-expanded="false"
                                     aria-controls="collapseEight">
                                     8. What is Included in your Services?
                                 </button>
                             </h2>
                             <div id="collapseEight" class="accordion-collapse collapse"
                                 aria-labelledby="headingEight" data-bs-parent="#ItemTwo">
                                 <div class="accordion-body">
                                     <strong>There are many variations of passages of Lorem Ipsum available, but the
                                         majority have suffered alteration in.</strong>
                                 </div>
                             </div>
                         </div>
                     @endif
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--=========== Faq Section End =========-->
