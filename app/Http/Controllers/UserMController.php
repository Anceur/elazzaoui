<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserMController extends Controller
{
    // عرض صفحة المستخدمين
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admin.usersM', compact('users')); // Update to match the view path
    }


    // تخزين مستخدم جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('usersM')->with('success', 'User created successfully.');
    }

    // عرض نموذج تحرير المستخدم
    public function edit($id)
    {
        $users = User::all(); // Ensure users are fetched
        $user = User::findOrFail($id);
        return view('admin.usersM', compact('users', 'user'));
    }

    // تحديث مستخدم
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Update password if provided
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('usersM')->with('success', 'User updated successfully.');
    }

    // حذف مستخدم
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('usersM')->with('success', 'User deleted successfully.');
    }
}
