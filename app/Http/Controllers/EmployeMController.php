<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeMController extends Controller
{
    // Method to display the list of employees
    public function index()
    {
        $employes = Employe::all(); // Fetch all employees
        return view('admin.employeM', compact('employes')); // Return view with employees data
    }

    // Method to show the form for creating a new employee
    public function create()
    {
        return view('employeM.create'); // Return the view to create an employee
    }

    // Method to store a new employee in the database
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'employes_name' => 'required|string|max:255',
            'employes_email' => 'required|email|unique:employes,employes_email',
            'employes_telephone' => 'required|string|max:15',
            'employes_adresse' => 'required|string|max:255',
            'employes_date_de_naissance' => 'required|date',
            'employes_sexe' => 'required|string|in:Male,Female',
            'employes_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow photo upload
            'employes_discription' => 'nullable|string|max:500',
        ]);

        // Handle photo upload if it exists
        if ($request->hasFile('employes_photo')) {
            $photoPath = $request->file('employes_photo')->store('employes_photos', 'public');
        } else {
            $photoPath = null;
        }

        // Create a new employee
        Employe::create([
            'employes_name' => $request->input('employes_name'),
            'employes_email' => $request->input('employes_email'),
            'employes_telephone' => $request->input('employes_telephone'),
            'employes_adresse' => $request->input('employes_adresse'),
            'employes_date_de_naissance' => $request->input('employes_date_de_naissance'),
            'employes_sexe' => $request->input('employes_sexe'),
            'employes_photo' => $photoPath, // Store the photo path in the database
            'employes_discription' => $request->input('employes_discription'),
        ]);

        return redirect()->route('employeM')->with('success', 'Employee added successfully.');
    }

    // Method to show the form for editing an existing employee
    public function edit($id)
    {
        $employe = Employe::findOrFail($id); // Find the employee by id
        return view('admin.employeM', compact('employe')); // Return the view with employee data
    }

    // Method to update an employee in the database
    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id); // Find the employee by id

        // Validate incoming data
        $request->validate([
            'employes_name' => 'required|string|max:255',
            'employes_email' => 'required|email|unique:employes,employes_email,' . $employe->id,
            'employes_telephone' => 'required|string|max:15',
            'employes_adresse' => 'required|string|max:255',
            'employes_date_de_naissance' => 'required|date',
            'employes_sexe' => 'required|string|in:Male,Female',
            'employes_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'employes_discription' => 'nullable|string|max:500',
        ]);

        // Handle photo upload if it exists
        if ($request->hasFile('employes_photo')) {
            // Delete the old photo if it exists
            if ($employe->employes_photo) {
                Storage::delete('public/' . $employe->employes_photo);
            }
            $photoPath = $request->file('employes_photo')->store('employes_photos', 'public');
        } else {
            $photoPath = $employe->employes_photo; // Keep the old photo if a new one isn't uploaded
        }

        // Update employee
        $employe->update([
            'employes_name' => $request->input('employes_name'),
            'employes_email' => $request->input('employes_email'),
            'employes_telephone' => $request->input('employes_telephone'),
            'employes_adresse' => $request->input('employes_adresse'),
            'employes_date_de_naissance' => $request->input('employes_date_de_naissance'),
            'employes_sexe' => $request->input('employes_sexe'),
            'employes_photo' => $photoPath, // Update the photo path
            'employes_discription' => $request->input('employes_discription'),
        ]);

        return redirect()->route('employeM')->with('success', 'Employee updated successfully.');
    }

    // Method to delete an employee from the database
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id); // Find the employee by id

        // Delete the employee's photo if it exists
        if ($employe->employes_photo) {
            Storage::delete('public/' . $employe->employes_photo);
        }

        // Delete the employee record
        $employe->delete();

        return redirect()->route('employeM')->with('success', 'Employee deleted successfully.');
    }
}
