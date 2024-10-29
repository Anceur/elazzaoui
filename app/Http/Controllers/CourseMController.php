<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseMController extends Controller
{
    // عرض صفحة إدارة الدورات
    public function index()
    {
        $courses = Course::all();
        return view('admin.coursesM', compact('courses'));
    }

    // عرض صفحة إضافة دورة جديدة
    public function create()
    {
        return view('coursesM.create'); // عرض صفحة إنشاء الدورة
    }

    // تخزين دورة جديدة
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_teacher' => 'required|string|max:255',
            'course_price' => 'required|numeric',
            'course_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // التحقق من رفع الملف وحفظه
        if ($request->hasFile('course_photo')) {
            $photoPath = $request->file('course_photo')->store('course_photos', 'public');
        } else {
            $photoPath = null;
        }

        // إنشاء دورة جديدة
        Course::create([
            'course_name' => $request->input('course_name'),
            'course_teacher' => $request->input('course_teacher'),
            'course_price' => $request->input('course_price'),
            'course_photo' => $photoPath,
        ]);

        return redirect()->route('coursesM')->with('success', 'Course created successfully.');
    }
    // عرض صفحة تعديل الدورة
    public function edit($id)
    {
        $course = Course::findOrFail($id); // إيجاد الدورة
        return view('coursesM.edit', compact('course')); // عرض صفحة تعديل الدورة
    }

    // تحديث الدورة
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_teacher' => 'required|string|max:255',
            'course_price' => 'required|numeric',
            'course_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('course_photo')) {
            // حذف الصورة القديمة
            if ($course->course_photo) {
                Storage::delete('public/' . $course->course_photo);
            }
            $photoPath = $request->file('course_photo')->store('course_photos', 'public');
        } else {
            $photoPath = $course->course_photo;
        }

        $course->update([
            'course_name' => $request->input('course_name'),
            'course_teacher' => $request->input('course_teacher'),
            'course_price' => $request->input('course_price'),
            'course_photo' => $photoPath,
        ]);

        return redirect()->route('coursesM')->with('success', 'Course updated successfully.');
    }

    // حذف الدورة
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($course->course_photo) {
            Storage::delete('public/' . $course->course_photo);
        }

        $course->delete();

        return redirect()->route('coursesM')->with('success', 'Course deleted successfully.');
    }
}
