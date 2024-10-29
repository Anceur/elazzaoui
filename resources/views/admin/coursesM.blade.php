@extends('adminlte::page')

@section('title', 'Manage Courses')

@section('content_header')
    <h1>Manage Courses</h1>
@stop

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form لإضافة دورة جديدة -->
        <h2>Add New Course</h2>
        <form action="{{ route('coursesM.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" class="form-control" id="course_name" name="course_name" required>
            </div>
            <div class="form-group">
                <label for="course_teacher">Course Teacher</label>
                <input type="text" class="form-control" id="course_teacher" name="course_teacher" required>
            </div>
            <div class="form-group">
                <label for="course_price">Course Price</label>
                <input type="number" class="form-control" id="course_price" name="course_price" required>
            </div>
            <div class="form-group">
                <label for="course_photo">Upload Photo</label>
                <input type="file" class="form-control-file" id="course_photo" name="course_photo" accept="image/*">
            </div>
            <button type="submit" class="btn btn-success">Create Course</button>
        </form>

        <!-- جدول لعرض الدورات المتاحة -->
        <h2 class="mt-5">Existing Courses</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Teacher</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_teacher }}</td>
                        <td>{{ $course->course_price }}</td>
                        <td>
                            <form action="{{ route('coursesM.destroy', $course->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script> console.log("Course management page loaded."); </script>
@stop
