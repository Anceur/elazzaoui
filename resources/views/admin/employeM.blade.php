@extends('adminlte::page')

@section('title', 'Manage Employees')

@section('content_header')
    <h1>Manage Employees</h1>
@stop

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form لإضافة موظف جديد -->
        <h2>Add New Employee</h2>
        <form action="{{ route('employeM.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="employes_name">Employee Name</label>
                <input type="text" class="form-control" id="employes_name" name="employes_name" required>
            </div>
            <div class="form-group">
                <label for="employes_email">Employee Email</label>
                <input type="email" class="form-control" id="employes_email" name="employes_email" required>
            </div>
            <div class="form-group">
                <label for="employes_telephone">Phone Number</label>
                <input type="text" class="form-control" id="employes_telephone" name="employes_telephone" required>
            </div>
            <div class="form-group">
                <label for="employes_adresse">Address</label>
                <input type="text" class="form-control" id="employes_adresse" name="employes_adresse" required>
            </div>
            <div class="form-group">
                <label for="employes_date_de_naissance">Date of Birth</label>
                <input type="date" class="form-control" id="employes_date_de_naissance" name="employes_date_de_naissance" required>
            </div>
            <div class="form-group">
                <label for="employes_sexe">Gender</label>
                <select class="form-control" id="employes_sexe" name="employes_sexe" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="employes_photo">Upload Photo</label>
                <input type="file" class="form-control-file" id="employes_photo" name="employes_photo" accept="image/*">
            </div>
            <div class="form-group">
                <label for="employes_discription">Description</label>
                <textarea class="form-control" id="employes_discription" name="employes_discription" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Employee</button>
        </form>

        <!-- جدول لعرض الموظفين -->
        <h2 class="mt-5">Existing Employees</h2>
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
                @foreach($employes as $employe)
                    <tr>
                        <td>{{ $employe->employes_name }}</td>
                        <td>{{ $employe->employes_email }}</td>
                        <td>{{ $employe->employes_telephone }}</td>
                        <td>{{ $employe->employes_adresse }}</td>
                        <td>{{ $employe->employes_date_de_naissance }}</td>
                        <td>{{ $employe->employes_sexe }}</td>
                        <td>
                            <form action="{{ route('employeM.destroy', $employe->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script> console.log("Employee management page loaded."); </script>
@stop
