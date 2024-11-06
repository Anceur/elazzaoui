@extends('master.master')

@section('content')
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('images/img-school-1-min.jpg') }}');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">الدورات</h1>
                        <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                            <p>اكتسب المهارات التي تحتاجها لتحقيق النجاح وتفوق في مجالك مع دوراتنا المتخصصة! احجز مكانك الآن واستثمر في مستقبلك</p>
                        </div>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">استكشاف الدورات</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">قائمة الدورات</h2>
    <div class="row" style="flex-direction: column;">
        @foreach ($courses as $course)
            <a href="{{ route('courses.details', $course->id) }}" class="course-item d-flex align-items-center mb-4 p-3 border" style="flex-direction: row-reverse; text-decoration: none; color: inherit; width: 100%;">
                <div class="vertical-bar"></div> <!-- الشريط العمودي الجديد -->
                <div class="course-image ml-3">
                    @if($course->course_photo)
                        <img src="{{ asset('storage/'.$course->course_photo) }}" alt="Image" class="img-fluid" style="width: 100px; height: 100px;">
                    @else
                        <img src="images/default-staff.jpg" alt="Image" class="img-fluid" style="width: 100px; height: 100px;">
                    @endif
                </div>
                <div class="course-info flex-grow-1" style="text-align: right;">
                    <h5 class="course-title mb-1">{{ $course->course_name }}</h5>
                    <div>
                        <p>{{ $course->course_desc }}</p>
                    </div>
                    <span class="badge badge-success">أفضل بيع</span>
                    <div class="coures-deux" style="text-align: right;" >
                    <p class="course-details mb-0 text-muted">14 ساعات كاملة</p>
                    <p class="course-update-date mb-0 text-muted">تحديث: 11/2021</p>
                    </div>
                </div>
          
             
                <div class="course-meta text-right">
                    <p class="course-price font-weight-bold">12,99 $US <del>59,99 $US</del></p>
                    <p><i class="uil uil-users-alt"> 200</i> {{ $course->enrollment_count }}</p>
                    <span class="rating-value">{{ $course->rating }}</span> <i class="uil uil-star" style="color: #f5c518;">4.2</i>
                </div>
            </a>
        @endforeach
    </div>
</div>

{{-- <div class="container mt-5">
    <h2 class="text-center mb-4">قائمة الدورات</h2>
    <div class="row" style="flex-direction: column;">
        @foreach ($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="mb-4">
                        @if($course->course_photo)
                            <img src="{{ asset('storage/'.$course->course_photo) }}" alt="Image" class="img-fluid">
                        @else
                            <img src="images/default-staff.jpg" alt="Image" class="img-fluid">
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->course_name }}</h5>
                        <p class="card-text">المعلم: {{ $course->course_teacher }}</p>
                        <p class="card-text">السعر: ${{ $course->course_price }}</p>
                    </div>
                    <a href="{{ route('courses.details', $course->id) }}" class="btn btn-primary">أنظر</a>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}

@endsection
