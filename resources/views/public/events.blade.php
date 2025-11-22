@extends('layouts.app')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>Events</h1>
    <p>Join our upcoming events, workshops, and networking sessions to enhance your learning experience.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Events</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Events Section -->
<section id="events" class="events section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Upcoming Events</h2>
    <p>Don't miss our exciting events and workshops</p>
  </div>

  <div class="container">
    <div class="row">
      <!-- Event 1 -->
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('frontend/img/events-1.jpg') }}" alt="Web Development Workshop" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Advanced JavaScript Workshop</a></h5>
            <p class="fst-italic text-center">December 15, 2024</p>
            <p class="card-text">Join us for an intensive workshop covering modern JavaScript concepts including ES6+, async/await, and advanced DOM manipulation techniques.</p>
            <div class="read-more-btn">
              <a href="#"><i class="bi bi-arrow-right"></i> Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Event 2 -->
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('frontend/img/events-2.jpg') }}" alt="Digital Marketing Seminar" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Digital Marketing Trends 2025</a></h5>
            <p class="fst-italic text-center">December 20, 2024</p>
            <p class="card-text">Discover the latest trends and strategies in digital marketing. Learn about AI-powered marketing, social commerce, and content automation.</p>
            <div class="read-more-btn">
              <a href="#"><i class="bi bi-arrow-right"></i> Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Event 3 -->
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('frontend/img/events-1.jpg') }}" alt="Career Fair" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Tech Career Fair 2025</a></h5>
            <p class="fst-italic text-center">January 10, 2025</p>
            <p class="card-text">Network with leading tech companies and explore career opportunities. Meet recruiters, participate in mock interviews, and get career guidance.</p>
            <div class="read-more-btn">
              <a href="#"><i class="bi bi-arrow-right"></i> Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Event 4 -->
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('frontend/img/events-2.jpg') }}" alt="Data Science Conference" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Data Science Summit</a></h5>
            <p class="fst-italic text-center">January 25, 2025</p>
            <p class="card-text">Join industry experts discussing the latest in machine learning, AI applications, and data visualization techniques in various industries.</p>
            <div class="read-more-btn">
              <a href="#"><i class="bi bi-arrow-right"></i> Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Event 5 -->
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('frontend/img/events-1.jpg') }}" alt="Mobile App Development" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Mobile App Development Bootcamp</a></h5>
            <p class="fst-italic text-center">February 5, 2025</p>
            <p class="card-text">Intensive 3-day bootcamp covering React Native and Flutter development. Build and deploy your first mobile app during the event.</p>
            <div class="read-more-btn">
              <a href="#"><i class="bi bi-arrow-right"></i> Register Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Event 6 -->
      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="600">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('frontend/img/events-2.jpg') }}" alt="Startup Pitch Competition" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="#">Startup Pitch Competition</a></h5>
            <p class="fst-italic text-center">February 18, 2025</p>
            <p class="card-text">Present your startup ideas to a panel of investors and industry experts. Win prizes and get funding opportunities for your innovative projects.</p>
            <div class="read-more-btn">
              <a href="#"><i class="bi bi-arrow-right"></i> Register Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section id="newsletter" class="newsletter section light-background">
  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-lg-6">
        <div class="text-center">
          <h3>Stay Updated</h3>
          <p>Subscribe to our newsletter to get notified about upcoming events and workshops!</p>
          <form action="#" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email" placeholder="Your Email Address">
              <input type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection