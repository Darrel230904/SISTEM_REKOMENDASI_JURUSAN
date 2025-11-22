@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>Contact</h1>
    <p>Get in touch with us. We'd love to hear from you and help you with your learning journey.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Contact</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>info@example.com</p>
          </div>
        </div>

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="600">
          <i class="bi bi-clock flex-shrink-0"></i>
          <div>
            <h3>Office Hours</h3>
            <p>Mon-Fri: 9AM - 6PM<br>Saturday: 9AM - 4PM<br>Sunday: Closed</p>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section id="map" class="map section">
  <div class="container-fluid p-0" data-aos="fade-up" data-aos-delay="100">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<!-- Contact Info Section -->
<section id="contact-info" class="contact-info section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Why Choose Us?</h2>
    <p>We're here to support your learning journey every step of the way</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="info-box">
          <i class="bi bi-headset"></i>
          <h3>24/7 Support</h3>
          <p>Round-the-clock assistance to help you with any questions or technical issues.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="info-box">
          <i class="bi bi-people"></i>
          <h3>Expert Instructors</h3>
          <p>Learn from industry professionals with years of real-world experience.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="info-box">
          <i class="bi bi-mortarboard"></i>
          <h3>Certified Courses</h3>
          <p>Earn recognized certificates that add value to your professional portfolio.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="info-box">
          <i class="bi bi-graph-up"></i>
          <h3>Career Growth</h3>
          <p>Get career guidance and job placement assistance to advance your professional goals.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection