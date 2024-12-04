@if(Auth::user()->usertype == 'admin')
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
                <label for="course_details">تفاصيل الدورة</label>
                <textarea class="form-control" id="course_details" name="course_details" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="course_video">Upload Main Video</label>
                <input type="file" class="form-control-file" id="course_video" name="course_video" accept="video/*">
            </div>
            
            <div class="form-group">
                <label for="course_photo">Upload Course Photo</label>
                <input type="file" class="form-control-file" id="course_photo" name="course_photo" accept="image/*">
            </div>

            <div class="form-group">
                <label for="playlist_videos">Upload Playlist Videos</label>
                <input type="file" class="form-control-file" id="playlist_videos" name="playlist_videos[]" accept="video/*" multiple>
                <small class="form-text text-muted">You can upload multiple videos for the playlist.</small>
            </div>

            <div class="form-group">
                <label for="course_desc">Course Description</label>
                <textarea class="form-control" id="course_desc" name="course_desc" rows="3"></textarea>
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
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_teacher }}</td>
                        <td>{{ $course->course_price }}</td>
                        <td>{{ $course->course_desc }}</td>
                        <td>
                            <a href="{{ route('coursesM.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
@endif
