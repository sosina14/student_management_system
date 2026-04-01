<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Student::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:students,email'],
            'course' => ['required', 'string', 'max:255'],
            'enrollment_date' => ['required', 'date'],
        ]);

        $student = Student::create($validated);

        return response()->json([
            'message' => 'Student created successfully.',
            'data' => $student,
        ], 201);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:students,email,' . $student->id],
            'course' => ['required', 'string', 'max:255'],
            'enrollment_date' => ['required', 'date'],
        ]);

        $student->update($validated);

        return response()->json([
            'message' => 'Student updated successfully.',
            'data' => $student,
        ]);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully.',
        ]);
    }
}
