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
    <div class="row">
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
</div>

@endsection
