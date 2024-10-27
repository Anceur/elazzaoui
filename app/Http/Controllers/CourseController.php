<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // عرض صفحة الدورات للمستخدمين
    public function index()
    {
        // جلب جميع الدورات من قاعدة البيانات
        $courses = Course::all();

        // تمرير الدورات إلى صفحة العرض courses.blade.php
        return view('courses.courses', compact('courses'));

    }

}
