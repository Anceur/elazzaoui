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
            'course_desc' => 'nullable|string',
            'course_details' => 'nullable|string',
            'course_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'course_video' => 'nullable|mimes:mp4,mov,avi|max:102400',
            'playlist_videos.*' => 'nullable|mimes:mp4,mov,avi|max:102400',
        ]);

        // رفع الصورة
        $photoPath = $request->hasFile('course_photo')
            ? $request->file('course_photo')->store('course_photos', 'public')
            : null;

        // رفع الفيديو الرئيسي
        $videoPath = $request->hasFile('course_video')
            ? $request->file('course_video')->store('course_videos', 'public')
            : null;

        // رفع قائمة الفيديوهات
        $playlistVideos = [];
        if ($request->hasFile('playlist_videos')) {
            foreach ($request->file('playlist_videos') as $video) {
                $playlistVideos[] = $video->store('playlist_videos', 'public');
            }
        }

        // إنشاء دورة جديدة
        Course::create([
            'course_name' => $request->input('course_name'),
            'course_teacher' => $request->input('course_teacher'),
            'course_price' => $request->input('course_price'),
            'course_desc' => $request->input('course_desc'),
            'course_details' => $request->input('course_details'),

            'course_photo' => $photoPath,
            'course_video' => $videoPath,
            'playlist_videos' => $playlistVideos,
        ]);

        return redirect()->route('coursesM')->with('success', 'Course created successfully.');
    }

    // عرض صفحة تعديل الدورة
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('coursesM.edit', compact('course'));
    }

    // تحديث الدورة
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_teacher' => 'required|string|max:255',
            'course_price' => 'required|numeric',
            'course_desc' => 'nullable|string',
            'course_details' => 'nullable|string', // التحقق باستخدام الاسم الجديد
            'course_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'course_video' => 'nullable|mimes:mp4,mov,avi|max:102400',
            'playlist_videos.*' => 'nullable|mimes:mp4,mov,avi|max:102400',
        ]);

        // رفع الصورة
        if ($request->hasFile('course_photo')) {
            if ($course->course_photo) {
                Storage::delete('public/' . $course->course_photo);
            }
            $photoPath = $request->file('course_photo')->store('course_photos', 'public');
        } else {
            $photoPath = $course->course_photo;
        }

        // رفع الفيديو الرئيسي
        if ($request->hasFile('course_video')) {
            if ($course->course_video) {
                Storage::delete('public/' . $course->course_video);
            }
            $videoPath = $request->file('course_video')->store('course_videos', 'public');
        } else {
            $videoPath = $course->course_video;
        }

        // رفع قائمة الفيديوهات
        $playlistVideos = $course->playlist_videos ?? [];
        if ($request->hasFile('playlist_videos')) {
            foreach ($request->file('playlist_videos') as $video) {
                $playlistVideos[] = $video->store('playlist_videos', 'public');
            }
        }

        $course->update([
            'course_name' => $request->input('course_name'),
            'course_teacher' => $request->input('course_teacher'),
            'course_price' => $request->input('course_price'),
            'course_desc' => $request->input('course_desc'),
            'course_details' => $request->input('course_details'),
            'course_photo' => $photoPath,
            'course_video' => $videoPath,
            'playlist_videos' => $playlistVideos,
        ]);

        return redirect()->route('coursesM')->with('success', 'Course updated successfully.');
    }

    // حذف الدورة
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // حذف الملفات إذا كانت موجودة
        if ($course->course_photo) {
            Storage::delete('public/' . $course->course_photo);
        }
        if ($course->course_video) {
            Storage::delete('public/' . $course->course_video);
        }
        if ($course->playlist_videos) {
            foreach ($course->playlist_videos as $video) {
                Storage::delete('public/' . $video);
            }
        }

        $course->delete();

        return redirect()->route('coursesM')->with('success', 'Course deleted successfully.');
    }
}
