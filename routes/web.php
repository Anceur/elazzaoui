<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// المسار الرئيسي للصفحة الرئيسية بدون تسجيل دخول
Route::get('/', function () {
    return view('home.homepage');
})->name('homepage');

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

Route::get('/staff', function () {
    return view('staff.staff');
});

Route::get('/courses', function () {
    return view('courses.courses');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // يمكن للمستخدمين المسجلين الدخول إلى الصفحة الشخصية أو لوحة القيادة
    Route::get('/homepage', function () {
        return view('home.homepage'); // يمكنك استبدالها بصفحة أخرى مثل الملف الشخصي
    })->name('homepage');
});


route::get('/home',[HomeController::class,'index']);