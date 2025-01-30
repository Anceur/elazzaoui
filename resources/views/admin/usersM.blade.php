@if(Auth::user()->usertype == 'admin')
    @extends('adminlte::page')

    @section('title', 'Manage Users')

    @section('content_header')
    <h1>Manage Users</h1>
    @stop

    @section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>{{ isset($user) ? 'Edit User' : 'Add New User' }}</h2>
        <form action="{{ isset($user) ? route('usersM.update', $user->id) : route('usersM.store') }}" method="POST">
            @csrf
            @if(isset($user))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($user) ? $user->name : '' }}"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ isset($user) ? $user->email : '' }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone"
                    value="{{ isset($user) ? $user->phone : '' }}" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ isset($user) ? $user->age : '' }}"
                    required>
            </div>
            <div class="form-group">
                <label for="selected_option">Option</label>
                <select class="form-control" id="selected_option" name="selected_option" required>
                    <option value="" disabled {{ !isset($user) ? 'selected' : '' }}>Select an option</option>
                    <option value="Option1" {{ isset($user) && $user->selected_option == 'Option1' ? 'selected' : '' }}>Option
                        1</option>
                    <option value="Option2" {{ isset($user) && $user->selected_option == 'Option2' ? 'selected' : '' }}>Option
                        2</option>
                    <option value="Option3" {{ isset($user) && $user->selected_option == 'Option3' ? 'selected' : '' }}>Option
                        3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <small class="form-text text-muted">Leave blank to keep the current password.</small>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update User' : 'Create User' }}</button>
        </form>

        <h2 class="mt-5">Existing Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>program</th>
                    <th>Option</th>
                    <th>time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->program}}</td>
                        <td>{{ $user->created_at}}</td>
                        <td>{{ $user->selected_option }}</td>
                        <td>
                            <a href="{{ route('usersM.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('usersM.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @stop

    @section('js')
    <script> console.log("User management page loaded."); </script>
    @stop
@endif