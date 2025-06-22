<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <style>
        nav {
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
        }
        nav a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('courses') }}">Courses</a>
        <a href="{{ route('reports') }}">Reports</a>
        <a href="{{ route('about') }}">About</a>
        <!-- <a href="{{ route('teachers.index') }}">Teachers</a> -->
    </nav>
    <div class="container">
        @yield('content')
    </div>
        <footer style="margin-top: 400px; text-align: center; color: white; font-size: 1rem;background-color:#888; padding: 20px;">
        <hr style="margin-bottom: 18px;">
        &copy; {{ date('Y') }} Student Management System. All rights reserved.
    </footer>
</body>
</html>