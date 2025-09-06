 @extends('layout.app')
 @section('title')
     CONTACT US - BLACK LION
 @endsection
 @section('content')
     <!-- Hero Section -->
     <section class="contact-hero d-flex align-items-center">
         <div class="container text-white text-center">
             <h1 class="display-4 fw-bold mb-3">CONTACT US</h1>
             <p class="lead">We'd love to hear from you</p>
         </div>
     </section>

     <!-- Contact Form Section -->
     <section class="py-5 bg-light">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-8">
                     <div class="card contact-card">
                         <div class="card-body p-5">
                             {{-- رسالة النجاح --}}
                             @if (session('success'))
                                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                                     {{ session('success') }}
                                     <button type="button" class="btn-close" data-bs-dismiss="alert"
                                         aria-label="Close"></button>
                                 </div>
                             @endif
                             <h2 class="text-center mb-5">Send us a message</h2>
                             <form method="POST" action="{{ route('contact.store') }}">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6 mb-4">
                                         <label for="name" class="form-label">Full Name</label>
                                         <input type="text" name="name" class="form-control" id="name" required>
                                     </div>
                                     <div class="col-md-6 mb-4">
                                         <label for="email" class="form-label">Email Address</label>
                                         <input type="email" name="email" class="form-control" id="email" required>
                                     </div>
                                 </div>
                                 <div class="mb-4">
                                     <label for="subject" class="form-label">Subject</label>
                                     <input type="text" name="subject" class="form-control" id="subject" required>
                                 </div>
                                 <div class="mb-4">
                                     <label for="message" class="form-label">Your Message</label>
                                     <textarea name="message" class="form-control" id="message" rows="5" required></textarea>
                                 </div>
                                 <div class="text-center">
                                     <button type="submit" class="btn btn-contact">Send Message</button>
                                 </div>
                             </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Contact Info Section -->
     <section class="py-5">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 mb-4 mb-md-0">
                     <div class="card contact-card h-100">
                         <div class="card-body text-center p-4">
                             <div class="contact-icon">
                                 <i class="fas fa-map-marker-alt"></i>
                             </div>
                             <h5>Our Location</h5>
                             <p class="mb-0">123 Soffar Street<br> Al Maadeyah
                                 , Edku 5953120<br>Beheira Governorate </p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 mb-4 mb-md-0">
                     <div class="card contact-card h-100">
                         <div class="card-body text-center p-4">
                             <div class="contact-icon">
                                 <i class="fas fa-phone-alt"></i>
                             </div>
                             <h5>Phone Numbers</h5>
                             <p class="mb-0 contact-phone">
                                 <a href="tel:+201228805144">Sales:01228805144</a>
                                 <a href="tel:+201228805144">Support:01102236477</a>
                                 <a href="tel:+201228805144">watsapp:01228805144</a>
                             </p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="card contact-card h-100">
                         <div class="card-body text-center p-4">
                             <div class="contact-icon">
                                 <i class="fas fa-envelope"></i>
                             </div>
                             <h5>Email Addresses</h5>
                             <p class="mb-0 contact-phone">
                                 <a target="blank"
                                     href="mailto:black.lionmenswaer@gmail.com">black.lionmenswaer@gmail.com</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Map Section -->
     <section class="py-0">
         <div class="container-fluid p-0">
             <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109179.95489900766!2d30.037286197780652!3d31.224231384101035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2z2KfZhNil2LPZg9mG2K_YsdmK2KnYjCDZhdit2KfZgdi42Kkg2KfZhNil2LPZg9mG2K_YsdmK2Kk!5e0!3m2!1sar!2seg!4v1751731373822!5m2!1sar!2seg"
                 width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

     </section>

     <!-- Business Hours -->
     <section class="py-5 bg-light">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6 text-center">
                     <h2 class="mb-4">Business Hours</h2>
                     <div class="table-responsive">
                         <table class="table">
                             <tbody>
                                 <tr>
                                     <td>Saturday - Wednesday</td>
                                     <td>9:00 AM - 8:00 PM</td>
                                 </tr>
                                 <tr>
                                     <td>Thursday</td>
                                     <td>10:00 AM - 8:00 PM</td>
                                 </tr>
                                 <tr>
                                     <td>Friday</td>
                                     <td>Closed</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endsection
