<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Colleges Routes
// List all colleges
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');

// Show the form to add a new college
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');

// Show the form to edit a college
Route::get('/colleges/{college}/edit', [CollegeController::class, 'edit'])->name('colleges.edit');


// Students Routes
// List all students (with filtering by college)
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Show the form to add a new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Show the form to edit a student
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

// Delete a student
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');