@if(Auth::user()->usertype == 'admin')
@extends('adminlte::page')

@section('title', 'Manage Teachers')

@section('content_header')
    <h1>Manage Teachers</h1>
@stop

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form to add a new teacher -->
        <h2>Add New Teacher</h2>
        <form action="{{ route('teachersM.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="teacher_name">Teacher Name</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name" required>
            </div>
            <div class="form-group">
                <label for="teacher_email">Teacher Email</label>
                <input type="email" class="form-control" id="teacher_email" name="teacher_email" required>
            </div>
            <div class="form-group">
                <label for="teacher_telephone">Phone Number</label>
                <input type="text" class="form-control" id="teacher_telephone" name="teacher_telephone" required>
            </div>
            <div class="form-group">
                <label for="teacher_adresse">Address</label>
                <input type="text" class="form-control" id="teacher_adresse" name="teacher_adresse" required>
            </div>
            <div class="form-group">
                <label for="teacher_date_de_naissance">Date of Birth</label>
                <input type="date" class="form-control" id="teacher_date_de_naissance" name="teacher_date_de_naissance" required>
            </div>
            <div class="form-group">
                <label for="teacher_sexe">Gender</label>
                <select class="form-control" id="teacher_sexe" name="teacher_sexe" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="teacher_photo">Upload Photo</label>
                <input type="file" class="form-control-file" id="teacher_photo" name="teacher_photo" accept="image/*">
            </div>
            <div class="form-group">
                <label for="teacher_discription">Description</label>
                <textarea class="form-control" id="teacher_discription" name="teacher_discription" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Teacher</button>
        </form>

        <!-- Table to display existing teachers -->
        <h2 class="mt-5">Existing Teachers</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->teacher_name }}</td>
                        <td>{{ $teacher->teacher_email }}</td>
                        <td>{{ $teacher->teacher_telephone }}</td>
                        <td>{{ $teacher->teacher_adresse }}</td>
                        <td>{{ $teacher->teacher_date_de_naissance }}</td>
                        <td>{{ $teacher->teacher_sexe }}</td>
                        <td>
                            <form action="{{ route('teachersM.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script> console.log("Teacher management page loaded."); </script>
@stop
@endif
