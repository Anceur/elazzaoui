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
}
