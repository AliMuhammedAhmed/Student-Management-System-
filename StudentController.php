<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Students.index', compact('students'));
    }

    public function create()
    {
        return view('Students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'course' => 'required',
            'age' => 'required|integer|min:1|max:120'
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'age' => $request->age,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    public function edit(Student $student)
    {
        return view('Students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'course' => 'required',
            'age' => 'required|integer|min:1|max:120'
        ]);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'age' => $request->age,
        ]);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
