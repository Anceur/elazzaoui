<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseMController extends Controller
{
    // عرض صفحة إدارة الدورات
    public function index()
    {
        $courses = Course::all();
        return view('admin.coursesM', compact('courses'));
    }

    // تخزين دورة جديدة
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_teacher' => 'required|string|max:255',
            'course_price' => 'required|numeric',
            'course_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow photo upload
        ]);

        if ($request->hasFile('course_photo')) {
            $photoPath = $request->file('course_photo')->store('course_photos_photos', 'public');
        } else {
            $photoPath = null;
        }

        // إنشاء دورة جديدة باستخدام البيانات المرسلة
        Course::create($request->all());

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('courses')->with('success', 'Course created successfully.');
    }

    // حذف دورة
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('courses')->with('success', 'Course deleted successfully.');
    }
}
