<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    //
    public function detail($id)
    {
        $courses = Course::findOrFail($id);
        return view('courses.details', compact('courses'));
    }


    public function play($id)
    {
        $courses = Course::findOrFail($id);
        return view('courses.playlist.playlist', compact('courses'));
    }
    // في دالة videoplay
    public function videoplay($id)
    {
        $course = Course::findOrFail($id);
        // تعيين المتغير videoSrc إلى المسار الصحيح للفيديو الافتراضي
        $videoSrc = $course->course_video;
        return view('courses.videoplayer.videopalyer', compact('course', 'videoSrc'));
    }

    // في دالة show
    public function show($id, $video = null)
    {
        $course = Course::findOrFail($id);

        // إذا تم تحديد الفيديو من الرابط، قم بتعيين مصدر الفيديو
        $videoSrc = $video ? $video : $course->course_video;

        return view('coursesM.show', compact('course', 'videoSrc'));
    }

}
