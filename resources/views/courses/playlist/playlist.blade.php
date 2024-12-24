@extends('master2.master2')

@section('content')
<section class="shopping-cart-section">
    <div class="shopping-cart-container">
        <!-- Header -->
        <div class="shopping-cart-header">
            <h1 class="cart-title"> دورة {{ $courses->course_name }}</h1>
            {{-- <p class="cart-subtitle">0 Courses in Cart</p> --}}
        </div>

        <!-- Content -->
        <div class="shopping-cart-content">
            <!-- Course Image -->
            <div class="course-image-container">
                <img src="{{ asset('storage/' . $courses->course_photo) }}" alt="Course Image" class="course-image">
            </div>

            <!-- Details -->
            <div class="cart-details">
                <p class="empty-cart-message">{{ $courses->course_name }}</p>
                <p class="empty-cart-message">{{ $courses->course_description }}</p>

                <a href="{{ route('courses.videoplayer', ['id' => $courses->id]) }}" class="btn-keep-shopping">تصفح الدورة</a>
            </div>
        </div>
    </div>
</section>
@endsection
