@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>Courses</h1>
    <p>Discover our comprehensive range of courses designed to help you achieve your learning goals.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Courses</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Courses Section -->
<section id="courses" class="courses section">
  <div class="container">
    <div class="row">
      <!-- Course 1 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="course-item">
          <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="Web Development Course">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Web Development</p>
              <p class="price">$169</p>
            </div>
            <h3><a href="#">Website Design</a></h3>
            <p class="description">Learn modern web design principles and create stunning, responsive websites using the latest technologies and best practices.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{ asset('frontend/img/trainers/trainer-1-2.jpg') }}" class="img-fluid" alt="">
                <a href="#" class="trainer-link">Antonio Rodriguez</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;50
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;65
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 2 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="course-item">
          <img src="{{ asset('frontend/img/course-2.jpg') }}" class="img-fluid" alt="SEO Course">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Marketing</p>
              <p class="price">$250</p>
            </div>
            <h3><a href="#">Search Engine Optimization</a></h3>
            <p class="description">Master SEO strategies to improve website visibility and drive organic traffic through proven optimization techniques.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{ asset('frontend/img/trainers/trainer-2-2.jpg') }}" class="img-fluid" alt="">
                <a href="#" class="trainer-link">Lana Smith</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;35
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;42
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 3 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="course-item">
          <img src="{{ asset('frontend/img/course-3.jpg') }}" class="img-fluid" alt="Copywriting Course">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Content</p>
              <p class="price">$180</p>
            </div>
            <h3><a href="#">Copywriting</a></h3>
            <p class="description">Develop persuasive writing skills to create compelling content that converts readers into customers.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{ asset('frontend/img/trainers/trainer-3-2.jpg') }}" class="img-fluid" alt="">
                <a href="#" class="trainer-link">Brandon Lee</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;20
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;85
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 4 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="course-item">
          <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="Mobile App Development">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Mobile Development</p>
              <p class="price">$299</p>
            </div>
            <h3><a href="#">Mobile App Development</a></h3>
            <p class="description">Build native and cross-platform mobile applications for iOS and Android using modern frameworks.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{ asset('frontend/img/trainers/trainer-1-2.jpg') }}" class="img-fluid" alt="">
                <a href="#" class="trainer-link">David Chen</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;75
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;90
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 5 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="course-item">
          <img src="{{ asset('frontend/img/course-2.jpg') }}" class="img-fluid" alt="Data Science Course">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Data Science</p>
              <p class="price">$350</p>
            </div>
            <h3><a href="#">Data Science & Analytics</a></h3>
            <p class="description">Learn data analysis, machine learning, and statistical modeling to extract insights from complex datasets.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{ asset('frontend/img/trainers/trainer-2-2.jpg') }}" class="img-fluid" alt="">
                <a href="#" class="trainer-link">Maria Garcia</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;60
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;78
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course 6 -->
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="600">
        <div class="course-item">
          <img src="{{ asset('frontend/img/course-3.jpg') }}" class="img-fluid" alt="Digital Marketing Course">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <p class="category">Marketing</p>
              <p class="price">$220</p>
            </div>
            <h3><a href="#">Digital Marketing</a></h3>
            <p class="description">Master digital marketing strategies including social media, PPC, email marketing, and content marketing.</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{ asset('frontend/img/trainers/trainer-3-2.jpg') }}" class="img-fluid" alt="">
                <a href="#" class="trainer-link">James Wilson</a>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bi bi-person user-icon"></i>&nbsp;45
                &nbsp;&nbsp;
                <i class="bi bi-heart heart-icon"></i>&nbsp;55
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection