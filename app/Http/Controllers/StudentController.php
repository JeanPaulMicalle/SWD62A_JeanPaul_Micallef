<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;

class StudentController extends Controller
{
      // List all students
      public function index()
      {
         $students = Student::all();
         $colleges = College::all();

         $students = Student::query()
            ->when(request('college_id'), function ($query) {
               return $query->where('college_id', request('college_id'));
            })
            ->when(request('sort'), function ($query) {
               return $query->orderBy('name', request('sort'));
            }, function ($query) {
               return $query->orderBy('name', 'asc'); 
            })
            ->with('college') 
            ->get();

         return view('students.index', compact('students', 'colleges'));
      }
 
      // Show the form to create a new student
      public function create()
      {
         $colleges = College::all();
         return view('students.create', compact('colleges'));
      }
 
      // Show the form to edit a student
      public function edit(Student $student)
      {
         $colleges = College::all();
         return view('students.edit', compact('student', 'colleges'));
      }
 
      // Delete a student
      public function destroy(Student $student)
      {
         try{
            $student->delete();
            return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
         } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting student: ' . $e->getMessage());
         }
      }

      public function update(Request $request, Student $student)
      {
         try{
            $validatedData = $request->validate([
               'name' => 'required',
               'email' => 'required|email',
               'phone' => 'required|digits:8',
               'dob' => 'required|date',
               'college_id' => 'required|exists:colleges,id'
            ]);

            $student->update($validatedData);

            return redirect()->route('students.index')->with('success', 'Student updated successfully!');
         } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating student: ' . $e->getMessage());
         }
      }

      // Handle new student creation form submission
      public function store(Request $request)
      {
         try{
            $validatedData = $request->validate([
               'name' => 'required',
               'email' => 'required|email|unique:students',
               'phone' => 'required',
               'dob' => 'required|date',
               'college_id' => 'required|exists:colleges,id'
            ]);

         Student::create($validatedData);

            return redirect()->route('students.index')->with('success', 'Student created successfully!');
         } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding student: ' . $e->getMessage());
         }
      }
}
