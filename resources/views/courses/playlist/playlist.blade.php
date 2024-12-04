@extends('master.master')

@section('content')
<div class="shopping-cart-container">
    <h1 class="cart-title">Courses Cart</h1>
    <p class="cart-subtitle">0 Courses in Cart</p>
        <div class="shopping-cart">
                <div class="empty-cart-content">
                    <img src="{{ asset('storage/' . $courses->course_photo) }}" alt="Course Image" class="course-image">
                    
                    <p class="empty-cart-message">Your cart is empty. Keep looking to find a course!</p>
                    <a href="{{ route('courses.videoplayer', ['id' => $courses->id]) }}" class="btn-keep-shopping">Keep looking</a>

                </div>

                <div class="all-coureses">

                </div>
        </div>
        <div class="all-courses">
            {{-- @foreach($courses->courses)
            //afficher all coureses  
            @endforeach --}}
        </div>
    </div>
@endsection
