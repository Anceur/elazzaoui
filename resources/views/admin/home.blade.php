@if(Auth::user()->usertype == 'admin')
    @extends('adminlte::page')

    @section('title', 'Dashboard')

    @section('content_header')
    <h1>Dashboard</h1>
    @stop

    @section('content')
    <div class="row">
        <!-- مربع المستخدمين -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('usersM') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- مربع المعلمين -->


        <!-- مربع الصفحة الرئيسية -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Home</h3>
                    <p>Welcome to the Dashboard</p>
                </div>
                <div class="icon">
                    <i class="fas fa-home"></i>
                </div>

                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>


        <!-- مربع الدورات -->

    </div>
    @stop

    @section('css')
    {{-- Add here extra stylesheets --}}
    {{--
    <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @stop

    @section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    @stop
@endif