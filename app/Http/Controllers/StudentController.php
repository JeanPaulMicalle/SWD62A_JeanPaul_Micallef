<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // TODO add views
     // List all students
     public function index()
     {
        $students = Student::all();
        return view('students.index', compact('students'));
     }
 
     // Show the form to create a new student
     public function create()
     {
        return view('students.create');
     }
 
     // Show the form to edit a student
     public function edit(Student $student)
     {
        return view('students.edit', compact('student'));
     }
 
     // Delete a student
     public function destroy(Student $student)
     {
        $student->delete();
        return redirect()->route('students.index');
     }
}
