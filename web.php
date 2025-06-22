<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Home page route
Route::get('/', function () {
    return view('home');
})->name('home');

// Resource controller for students CRUD operations
Route::resource('students', StudentController::class);

// Resource controller for teachers CRUD operations
Route::resource('teachers', TeacherController::class);

// Static pages routes
Route::view('/courses', 'courses')->name('courses');
Route::view('/reports', 'reports')->name('reports');
Route::view('/about', 'about')->name('about');
