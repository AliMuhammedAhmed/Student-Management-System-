@extends('layouts.app')

@section('content')
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #f9f9f9; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
        <h1 style="color: #007bff; font-size: 2rem; margin-bottom: 24px;">Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 18px;">
                <label for="name" style="display:block; margin-bottom:6px; color:#333;">Name:</label>
                <input type="text" id="name" name="name" value="{{ $student->name }}" required style="width:100%; padding:8px; border-radius:4px; border:1px solid #ccc;">
            </div>
            <div style="margin-bottom: 18px;">
                <label for="email" style="display:block; margin-bottom:6px; color:#333;">Email:</label>
                <input type="email" id="email" name="email" value="{{ $student->email }}" required style="width:100%; padding:8px; border-radius:4px; border:1px solid #ccc;">
            </div>
            <div style="margin-bottom: 18px;">
                <label for="age" style="display:block; margin-bottom:6px; color:#333;">Age:</label>
                <input type="number" id="age" name="age" value="{{ $student->age }}" required style="width:100%; padding:8px; border-radius:4px; border:1px solid #ccc;">
            </div>
            <div style="margin-bottom: 24px;">
                <label for="course" style="display:block; margin-bottom:6px; color:#333;">Course:</label>
                <input type="text" id="course" name="course" value="{{ $student->course }}" required style="width:100%; padding:8px; border-radius:4px; border:1px solid #ccc;">
            </div>
            <button type="submit" style="background:#007bff; color:#fff; padding:10px 24px; border:none; border-radius:4px; font-size:1rem; cursor:pointer;">
                Update
            </button>
        </form>
    </div>
@endsection
