@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>Trainers</h1>
    <p>Meet our expert trainers who are passionate about helping you achieve your learning goals.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Trainers</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Trainers Section -->
<section id="trainers" class="trainers section">
  <div class="container">
    <div class="row gy-5">
      <!-- Trainer 1 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="{{ asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Walter White</h4>
            <span>Web Development Expert</span>
            <p>
              Senior full-stack developer with 10+ years of experience in modern web technologies. Specializes in JavaScript, React, Node.js, and cloud architecture.
            </p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Trainer 2 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="{{ asset('frontend/img/trainers/trainer-2.jpg') }}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Sarah Johnson</h4>
            <span>Digital Marketing Strategist</span>
            <p>
              Marketing professional with expertise in SEO, social media marketing, and content strategy. Helped 200+ businesses grow their online presence.
            </p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Trainer 3 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="{{ asset('frontend/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>William Anderson</h4>
            <span>Content & Copywriting Specialist</span>
            <p>
              Award-winning copywriter and content strategist with a track record of creating compelling content that drives conversions and engagement.
            </p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Trainer 4 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <img src="{{ asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>David Chen</h4>
            <span>Mobile App Developer</span>
            <p>
              Mobile development expert with extensive experience in iOS and Android development. Passionate about creating user-friendly mobile experiences.
            </p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Trainer 5 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="member">
          <img src="{{ asset('frontend/img/trainers/trainer-2.jpg') }}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Maria Garcia</h4>
            <span>Data Science & Analytics</span>
            <p>
              Data scientist with PhD in Statistics and expertise in machine learning, predictive modeling, and business intelligence solutions.
            </p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Trainer 6 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="member">
          <img src="{{ asset('frontend/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
          <div class="member-content">
            <h4>James Wilson</h4>
            <span>UX/UI Design Expert</span>
            <p>
              Creative designer with 8+ years of experience in user experience and interface design. Specialized in creating intuitive and beautiful digital products.
            </p>
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">
  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h3>Ready to Start Learning?</h3>
          <p>Join thousands of students who have transformed their careers with our expert trainers. Get personalized guidance and hands-on experience in your chosen field.</p>
          <a class="cta-btn" href="{{ route('courses') }}">Explore Our Courses</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection