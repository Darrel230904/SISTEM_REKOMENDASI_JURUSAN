@extends('layouts.public')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>Pricing</h1>
    <p>Choose the perfect plan that fits your learning needs and budget.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Pricing</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <p>Choose Your Learning Plan</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      <!-- Basic Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item">
          <h3>Basic</h3>
          <div class="icon">
            <i class="bi bi-box"></i>
          </div>
          <h4><sup>$</sup>29<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Access to 10 courses</span></li>
            <li><i class="bi bi-check"></i> <span>Basic community support</span></li>
            <li><i class="bi bi-check"></i> <span>Course completion certificates</span></li>
            <li><i class="bi bi-check"></i> <span>Email support</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>1-on-1 mentoring</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Project reviews</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Career guidance</span></li>
          </ul>
          <div class="text-center">
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>
      </div>

      <!-- Standard Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-item featured">
          <h3>Standard</h3>
          <div class="icon">
            <i class="bi bi-rocket"></i>
          </div>
          <h4><sup>$</sup>59<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Access to all courses</span></li>
            <li><i class="bi bi-check"></i> <span>Priority community support</span></li>
            <li><i class="bi bi-check"></i> <span>Course completion certificates</span></li>
            <li><i class="bi bi-check"></i> <span>Email & chat support</span></li>
            <li><i class="bi bi-check"></i> <span>Monthly 1-on-1 mentoring</span></li>
            <li><i class="bi bi-check"></i> <span>Project reviews</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Career guidance</span></li>
          </ul>
          <div class="text-center">
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>
      </div>

      <!-- Premium Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="pricing-item">
          <h3>Premium</h3>
          <div class="icon">
            <i class="bi bi-gem"></i>
          </div>
          <h4><sup>$</sup>99<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Access to all courses</span></li>
            <li><i class="bi bi-check"></i> <span>VIP community support</span></li>
            <li><i class="bi bi-check"></i> <span>Course completion certificates</span></li>
            <li><i class="bi bi-check"></i> <span>24/7 priority support</span></li>
            <li><i class="bi bi-check"></i> <span>Weekly 1-on-1 mentoring</span></li>
            <li><i class="bi bi-check"></i> <span>Detailed project reviews</span></li>
            <li><i class="bi bi-check"></i> <span>Complete career guidance</span></li>
          </ul>
          <div class="text-center">
            <a href="#" class="buy-btn">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="faq section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Find answers to common questions about our pricing plans</p>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-container">
          <div class="faq-item faq-active">
            <h3>Can I change my plan anytime?</h3>
            <div class="faq-content">
              <p>Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Is there a free trial available?</h3>
            <div class="faq-content">
              <p>We offer a 7-day free trial for all our plans so you can explore our platform and courses before making a commitment.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>What payment methods do you accept?</h3>
            <div class="faq-content">
              <p>We accept all major credit cards, PayPal, and bank transfers. All payments are processed securely through encrypted channels.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Do you offer discounts for students?</h3>
            <div class="faq-content">
              <p>Yes! We offer a 30% discount for students with valid student ID. Contact our support team to apply for the student discount.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>What happens if I cancel my subscription?</h3>
            <div class="faq-content">
              <p>You can cancel anytime. You'll continue to have access to your courses until the end of your current billing period.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection