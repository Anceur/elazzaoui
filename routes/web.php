<?php

use App\Http\Controllers\DetailsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserMController;
use App\Http\Controllers\CourseMController;
use App\Http\Controllers\EmployeMController;
use App\Http\Controllers\TeacherMController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;



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


route::get('/home', [HomeController::class, 'index']);

Route::get('/admin/users', function () {
    return view('admin.usersM');
});
Route::get('/admin/courses', function () {
    return view('admin.coursesM');
});
Route::get('/admin/team', function () {
    return view('admin.employeM');
});
Route::get('/admin/teacher', function () {
    return view('admin.teachersM');
});
Route::get('/payment', function () {
    return view('payment.payment');
});

Route::middleware(['auth:sanctum', 'verified', 'admin:admin'])->prefix('admin')->group(function () {
    // Users management
    Route::get('/users', [UserMController::class, 'index'])->name('usersM');
    Route::post('/users', [UserMController::class, 'store'])->name('usersM.store');
    Route::get('/users/{id}/edit', [UserMController::class, 'edit'])->name('usersM.edit');
    Route::put('/users/{id}', [UserMController::class, 'update'])->name('usersM.update');
    Route::delete('/users/{id}', [UserMController::class, 'destroy'])->name('usersM.destroy');

    // Courses management
    Route::get('/courses', [CourseMController::class, 'index'])->name('coursesM');
    Route::get('/courses/{id}/edit', [CourseMController::class, 'edit'])->name('coursesM.edit');
    Route::get('/courses/create', [CourseMController::class, 'create'])->name('coursesM.create');
    Route::put('/courses/{id}', [CourseMController::class, 'update'])->name('coursesM.update');
    Route::post('/courses', [CourseMController::class, 'store'])->name('coursesM.store');
    Route::delete('/courses/{id}', [CourseMController::class, 'destroy'])->name('coursesM.destroy');

    // Team management
    Route::get('/team', [EmployeMController::class, 'index'])->name('employeM');
    Route::post('/team', [EmployeMController::class, 'store'])->name('employeM.store');
    Route::get('/team/{id}/edit', [EmployeMController::class, 'edit'])->name('employeM.edit');
    Route::put('/team/{id}', [EmployeMController::class, 'update'])->name('employeM.update');
    Route::delete('/team/{id}', [EmployeMController::class, 'destroy'])->name('employeM.destroy');
    Route::get('/team/create', [EmployeMController::class, 'create'])->name('employeM.create');

    // Teachers management
    Route::get('/teacher', [TeacherMController::class, 'index'])->name('teachersM');
    Route::post('/teacher', [TeacherMController::class, 'store'])->name('teachersM.store');
    Route::get('/teacher/create', [TeacherMController::class, 'create'])->name('teachersM.create');
    Route::get('/teacher/{id}/edit', [TeacherMController::class, 'edit'])->name('teachersM.edit');
    Route::put('/teacher/{id}', [TeacherMController::class, 'update'])->name('teachersM.update');
    Route::delete('/teacher/{id}', [TeacherMController::class, 'destroy'])->name('teachersM.destroy');
});


Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/staff', [EmployeController::class, 'index'])->name('staff.index');


Route::get('/courses/details/{id}', [DetailsController::class, 'detail'])->name('courses.details');

Route::post('/contact', [ContactController::class, 'sendContactMessage'])->name('contact.send');




Route::get('/create-invoice', [PaymentController::class, 'createInvoice'])->name('create.invoice');

Route::get('/payment/callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');
