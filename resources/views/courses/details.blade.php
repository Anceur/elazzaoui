@extends('master2.master2')

@section('content')
<div class="course-details-page">
    <div class="container bg-1" style="padding: 15% 5%">
        <div class="row">
            <!-- Right Sidebar Section -->
            <div class="course-sidebar col-lg-4" data-aos="fade-up">
              <div class="course-preview">
                  <a href="#" class="preview-video-link">
                      <img src="{{ asset('images/img-school-4-min.jpg')}}" alt="Course Preview" class="img-fluid rounded">
                      <span class="play-icon">▶</span>
                  </a>
              </div>
              <div class="tab-container">
                  <button class="tab-button active">Personal</button>
                  <button class="tab-button">Teams</button>
              </div>
              <div class="pricing-section">
                <p class="price">${{ $courses->course_price }}</p>
                @if(Auth::check())
                    <!-- إذا كان المستخدم مسجلاً، توجيهه إلى صفحة الدفع -->
                    <a href="{{ url('payment') }}" class="btn btn-primary enroll-btn">Try Personal Plan for free</a>
                @else
                    <!-- إذا كان المستخدم غير مسجل، توجيهه إلى صفحة التسجيل -->
                    <a href="{{ url('register') }}" class="btn btn-primary enroll-btn">Try Personal Plan for free</a>
                @endif
                <p class="price-details">Starting at €15.00 per month after trial</p>
            </div>

            {{-- <div class="pricing-section">
                <p class="price">${{ $course->price }}</p>
                <a href="{{ route('create.invoice') }}" class="btn btn-primary enroll-btn">Try Personal Plan for Free</a>
                <p class="price-details">Starting at €15.00 per month after trial</p>
            </div>
             --}}
            
              <div class="subscription-info">
                  <p>Get this course, plus 12,000+ of our top-rated courses, with Personal Plan. <a href="#">Learn more</a></p>
              </div>
            </div>

            <!-- Left Content Section -->
            <div class="col-lg-8 course-content">
                <h1 class="course-title">{{ $courses->course_name }}</h1>
                <p class="course-subtitle">{{ $courses->course_discription }}</p>
                <div class="course-rating">
                    <span class="badge badge-success">Bestseller</span>
                    <span class="rating">4.7</span>
                    <span class="star-rating">★★★★☆</span>
                    <a href="#" class="ratings-count">(330,788 ratings)</a>
                    <span class="students-count">1,414,171 students</span>
                </div>
                <p class="course-author">Created by {{ $courses->course_teacher }}</p>
                <div class="course-details">
                  <span class="course-meta-item">
                      <!-- SVG Icon for "Last Updated" -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm10.854 3.646a.5.5 0 0 0-.708 0L8 10.793 6.854 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708z"/>
                      </svg>
                      Last updated 10/2024
                  </span> · 
              
                  <span class="course-meta-item">
                      <!-- SVG Icon for "Language" -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                          <path d="M4.52 7h4.96c-.022.345-.076.68-.16 1H4.68a6.98 6.98 0 0 1-.16-1z"/>
                          <path d="M0 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2V4zm1 2v7a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6H1z"/>
                          <path d="M11.5 3a.5.5 0 0 0-.5-.5H6.18c.161-.258.313-.524.463-.797.04-.07.08-.141.122-.214a.5.5 0 1 0-.876-.478 10.143 10.143 0 0 1-.482.857 10.07 10.07 0 0 1-.478.86.5.5 0 1 0 .874.478c.042-.073.082-.144.122-.214.151-.273.302-.539.463-.797h4.83a.5.5 0 0 0 .5-.5z"/>
                          <path d="M10.61 7.34c.03.07.06.14.089.21H5.299a6.982 6.982 0 0 1 .163-1h4.477c.021.036.042.073.064.109a9.072 9.072 0 0 0 .327.681z"/>
                          <path d="M5.526 12.32a.5.5 0 1 0-.852-.514 7.04 7.04 0 0 1-.78 1.269c-.04.071-.08.142-.122.215a.5.5 0 0 0 .876.478c.042-.073.082-.144.122-.214.307-.518.563-.995.756-1.477z"/>
                      </svg>
                      English
                  </span> · 
              
                  <span class="course-meta-item">
                      <!-- SVG Icon for "Additional Languages" -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                          <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm1.464-1h2.39a12.056 12.056 0 0 1 0 2h-2.39A6.973 6.973 0 0 1 1 8c0-.34.028-.672.079-.997.128-.8.385-1.558.744-2.248A.546.546 0 0 1 2.348 5a13.03 13.03 0 0 1 .236-.241A11.96 11.96 0 0 1 8 2.304c.42 0 .834.03 1.242.085a8.14 8.14 0 0 1 1.242-.085 6.992 6.992 0 0 1 3.96 1.187 7.032 7.032 0 0 1-1.77 2.36 7.138 7.138 0 0 1-3.432 1.004H8.95l-.242.021a10.978 10.978 0 0 0-1.092 3.915 6.992 6.992 0 0 1-4.536-4.536zM3.5 5a12.062 12.062 0 0 0-.351 1h1.92a13.02 13.02 0 0 1-.056-.402C4.987 4.314 4.29 3.768 3.5 3.5V5zm9 .5a6.973 6.973 0 0 1 3.5 2.5c.092-.324.153-.66.193-.997.013-.119.013-.24.013-.357 0-.125-.01-.247-.029-.367a6.992 6.992 0 0 0-3.595-.634A7.018 7.018 0 0 0 10.49 4a5.992 5.992 0 0 0-.748-.144c-.187-.029-.375-.053-.566-.07A10.978 10.978 0 0 0 8.026 4c-.196.014-.391.03-.584.046a12.105 12.105 0 0 0-1.018.12c-.187.02-.373.046-.558.075a5.992 5.992 0 0 0-.815.215A6.992 6.992 0 0 1 5.5 6.5h6.5V5.5z"/>
                      </svg>
                      14 more
                  </span>
              </div>
              
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true
    });
</script>

@endsection