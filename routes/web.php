<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserMController;
use App\Http\Controllers\ContactController;

use Illuminate\Http\Request;

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password'); // هذا صحيح

    if (Auth::attempt($credentials)) {
        return redirect()->intended('home');
    }

    return back()->withErrors([
        'email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.',
    ]);
});



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

// // المسار لصفحة "العناصر"
// Route::get('/elements', function () {
//     return view('elements.elements');
// });

// // المسار لصفحة "المعرض"
// Route::get('/gallery', function () {
//     return view('gallery.gallery');
// });

// المسار لصفحة "الأخبار"
Route::get('/news', function () {
    return view('news.news');
});



Route::get('/waiting', function () {
    return view('waiting.waiting');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // يمكن للمستخدمين المسجلين الدخول إلى الصفحة الشخصية أو لوحة القيادة
    Route::get('/homepage', function () {
        return view('home.homepage'); // يمكنك استبدالها بصفحة أخرى مثل الملف الشخصي
    })->name('dashboard');
});


route::get('/home', [HomeController::class, 'index']);

Route::get('/admin/users', function () {
    return view('admin.usersM');
});


Route::middleware(['auth:sanctum', 'verified', 'admin:admin'])->prefix('admin')->group(function () {
    // Users management
    Route::get('/users', [UserMController::class, 'index'])->name('usersM');
    Route::post('/users', [UserMController::class, 'store'])->name('usersM.store');
    Route::get('/users/{id}/edit', [UserMController::class, 'edit'])->name('usersM.edit');
    Route::put('/users/{id}', [UserMController::class, 'update'])->name('usersM.update');
    Route::delete('/users/{id}', [UserMController::class, 'destroy'])->name('usersM.destroy');


});







Route::post('/contact', [ContactController::class, 'sendContactMessage'])->name('contact.send');











