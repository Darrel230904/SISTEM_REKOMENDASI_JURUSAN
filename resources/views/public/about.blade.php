@extends('layouts.public')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>About</h1>
    <p>Learn more about our mission, vision, and team dedicated to providing quality education and training.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">About</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
        <h3>Our Mission & Vision</h3>
        <p class="fst-italic">
          We are committed to providing world-class education and training programs that empower individuals to achieve their professional goals and contribute meaningfully to society.
        </p>
        <ul>
          <li><i class="bi bi-check-circle"></i> <span>Innovative learning methods and cutting-edge curriculum</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Experienced instructors with industry expertise</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Flexible scheduling to accommodate different lifestyles</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Comprehensive support from enrollment to career placement</span></li>
        </ul>
        <a href="{{ route('contact') }}" class="read-more"><span>Contact Us</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section id="stats" class="stats section light-background">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
          <p>Happy Students</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
          <p>Courses</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
          <p>Events</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="1" class="purecounter"></span>
          <p>Expert Trainers</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Team Section -->
<section id="team" class="team section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>Our Expert Team</p>
  </div>

  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
        <div class="member-img">
          <img src="{{ asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>Walter White</h4>
          <span>Chief Executive Officer</span>
          <p>Experienced leader with over 15 years in education technology and business development.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
        <div class="member-img">
          <img src="{{ asset('frontend/img/trainers/trainer-2.jpg') }}" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>Sarah Johnson</h4>
          <span>Head of Curriculum</span>
          <p>Expert in educational design with a passion for creating engaging learning experiences.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="{{ asset('frontend/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>William Anderson</h4>
          <span>Technology Director</span>
          <p>Tech enthusiast focused on implementing innovative solutions for modern education.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection