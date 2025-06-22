@extends('layouts.app')

@section('content')
    <div style="max-width: 900px; margin: 40px auto; padding: 30px; background: #f9f9f9; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
        <h1 style="color: #007bff; font-size: 2rem; margin-bottom: 24px;">Students List</h1>
        <a href="{{ route('students.create') }}" style="display: inline-block; margin-bottom: 18px; background: #007bff; color: #fff; padding: 10px 22px; border-radius: 5px; text-decoration: none;">Add Student</a>

        @if(session('success'))
            <p style="color: green; margin-bottom: 18px;">{{ session('success') }}</p>
        @endif

        <table style="width:100%; border-collapse: collapse; background: #fff;">
            <tr style="background: #e9ecef;">
                <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Age</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Course</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->age }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->email }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->course }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <a href="{{ route('students.edit', $student->id) }}" style="color: #007bff; margin-right: 8px;">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" style="color: #dc3545; background: none; border: none; cursor: pointer;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
