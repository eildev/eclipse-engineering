 <!--=========== Contact Section Start =========-->
 <div class="tj-contact-section tj-contact-page mb-5 ">
     <div class="container">
         <div class="row align-items-end">
             <div class="col-lg-6">
                 <div class="contact-left-content">
                     <div class="tj-sec-heading-two">
                         <span class="sub-title">For A New World</span>
                         <h2 class="title">
                             Let’s Make
                             <span>Some Change</span>
                         </h2>
                         <div class="desc">
                             <p>
                                 These cases are perfectly simple and easy to distinguish. In a free hour,
                                 when and when avoided.
                             </p>
                         </div>
                         <div class="contact-map">
                             <iframe
                                 src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14606.55363484149!2d90.4360368!3d23.7602705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c78babc63f07%3A0xcfbed920325b2edb!2sEclipse%20Engineering%20Ltd.!5e0!3m2!1sen!2sbd!4v1732650412526!5m2!1sen!2sbd"
                                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                 referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="tj-contact-form">
                     <form action="{{ route('contact.store') }}" method="POST">
                         @csrf
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="form-input">
                                     <input type="text" id="nameOne" name="name" placeholder="Your Name...."
                                         required />
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-input">
                                     <input type="text" id="phone" name="phone" placeholder="Phone..."
                                         required />
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-input">
                                     <input type="email" id="emailTwo" name="email" placeholder="Enter your Email"
                                         required />
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-input">
                                     <input type="text" id="site" name="company_name"
                                         placeholder="Enter Company Name" required />
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="form-input">
                                     <textarea id="message" name="message" placeholder="Write Here...."></textarea>
                                 </div>
                             </div>
                             <div class="tj-contact-button">
                                 <button class="tj-primary-btn2 btn" type="submit">
                                     Contact Us <i class="flaticon-right-arrow"></i>
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--=========== Contact Section End =========-->
