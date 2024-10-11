<?php

use Illuminate\Support\Facades\Route;

// المسار الرئيسي للصفحة الرئيسية
Route::get('/', function () {
    return view('home.homepage');
});

// المسار لصفحة "حول"
Route::get('/about', function () {
    return view('about.about');
});

// المسار لصفحة "اتصل بنا"
Route::get('/contact', function () {
    return view('contact.contact');
});

// المسار لصفحة "العناصر"
Route::get('/elements', function () {
    return view('elements.elements');
});

// المسار لصفحة "المعرض"
Route::get('/gallery', function () {
    return view('gallery.gallery');
});

// المسار لصفحة "الأخبار"
Route::get('/news', function () {
    return view('news.news');
});

// المسار لصفحة "فريق العمل"
Route::get('/staff', function () {
    return view('staff.staff');
});
Route::get('/login', function () {
    return view('auth.login.login');
});
Route::get('/register', function () {
    return view('auth.register.register');
});
Route::get('/courses', function () {
    return view('courses.courses');
});
