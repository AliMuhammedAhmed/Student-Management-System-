@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 40px;">
        <h1 style="font-size: 2.5rem; color: #007bff; margin-bottom: 20px;">
            Welcome to the Student Management System
        </h1>
        <p style="font-size: 1.2rem; color: #555;">
            Manage students, teachers, courses, and reports all in one place.
        </p>
        <div style="margin-top: 40px;">
            <a href="{{ route('students.index') }}" style="display: inline-block; padding: 12px 28px; background: #007bff; color: #fff; border-radius: 6px; text-decoration: none; font-size: 1.1rem; margin: 10px;">
                View Students
            </a>
            
            <a href="{{ route('courses') }}" style="display: inline-block; padding: 12px 28px; background: #17a2b8; color: #fff; border-radius: 6px; text-decoration: none; font-size: 1.1rem; margin: 10px;">
                Courses
            </a>
            <a href="{{ route('reports') }}" style="display: inline-block; padding: 12px 28px; background: #ffc107; color: #212529; border-radius: 6px; text-decoration: none; font-size: 1.1rem; margin: 10px;">
                Reports
            </a>
            <a href="{{ route('about') }}" style="display: inline-block; padding: 12px 28px; background: #6c757d; color: #fff; border-radius: 6px; text-decoration: none; font-size: 1.1rem; margin: 10px;">
                About
            </a>
        </div>
   
       
   
@endsection
