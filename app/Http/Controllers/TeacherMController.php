<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherMController extends Controller
{
    // Display all teachers
    public function index()
    {
        $teachers = Teacher::all(); // Fetch all teachers
        return view('admin.teachersM', compact('teachers')); // Pass 'teachers' to the view
    }

    // Show the form for creating a new teacher
    public function create()
    {
        return view('teachersM.create'); // Return the 'create teacher' view
    }

    // Store a new teacher in the database
    public function store(Request $request)
    {
        $request->validate([
            'teacher_name' => 'required|string|max:255',
            'teacher_email' => 'required|email|unique:teachers,teacher_email',
            'teacher_telephone' => 'required|string|max:15',
            'teacher_adresse' => 'required|string|max:255',
            'teacher_date_de_naissance' => 'required|date',
            'teacher_sexe' => 'required|string|in:Male,Female',
            'teacher_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teacher_discription' => 'nullable|string|max:500',
        ]);

        $photoPath = $request->hasFile('teacher_photo') ? $request->file('teacher_photo')->store('teacher_photos', 'public') : null;

        Teacher::create([
            'teacher_name' => $request->input('teacher_name'),
            'teacher_email' => $request->input('teacher_email'),
            'teacher_telephone' => $request->input('teacher_telephone'),
            'teacher_adresse' => $request->input('teacher_adresse'),
            'teacher_date_de_naissance' => $request->input('teacher_date_de_naissance'),
            'teacher_sexe' => $request->input('teacher_sexe'),
            'teacher_photo' => $photoPath,
            'teacher_discription' => $request->input('teacher_discription'),
        ]);

        return redirect()->route('teachersM')->with('success', 'Teacher added successfully.');
    }

    // Edit an existing teacher
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachersM', compact('teacher'));
    }

    // Update teacher details
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $request->validate([
            'teacher_name' => 'required|string|max:255',
            'teacher_email' => 'required|email|unique:teachers,teacher_email,' . $teacher->id,
            'teacher_telephone' => 'required|string|max:15',
            'teacher_adresse' => 'required|string|max:255',
            'teacher_date_de_naissance' => 'required|date',
            'teacher_sexe' => 'required|string|in:Male,Female',
            'teacher_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teacher_discription' => 'nullable|string|max:500',
        ]);

        $photoPath = $request->hasFile('teacher_photo') ? $request->file('teacher_photo')->store('teacher_photos', 'public') : $teacher->teacher_photo;

        if ($request->hasFile('teacher_photo') && $teacher->teacher_photo) {
            Storage::delete('public/' . $teacher->teacher_photo);
        }

        $teacher->update([
            'teacher_name' => $request->input('teacher_name'),
            'teacher_email' => $request->input('teacher_email'),
            'teacher_telephone' => $request->input('teacher_telephone'),
            'teacher_adresse' => $request->input('teacher_adresse'),
            'teacher_date_de_naissance' => $request->input('teacher_date_de_naissance'),
            'teacher_sexe' => $request->input('teacher_sexe'),
            'teacher_photo' => $photoPath,
            'teacher_discription' => $request->input('teacher_discription'),
        ]);

        return redirect()->route('teachersM')->with('success', 'Teacher updated successfully.');
    }

    // Delete a teacher
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        if ($teacher->teacher_photo) {
            Storage::delete('public/' . $teacher->teacher_photo);
        }

        $teacher->delete();

        return redirect()->route('teachersM')->with('success', 'Teacher deleted successfully.');
    }
}
