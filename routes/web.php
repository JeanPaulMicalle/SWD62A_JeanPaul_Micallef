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

// Store a new college (handle create form submission)
Route::post('/colleges', [CollegeController::class, 'store'])->name('colleges.store');

// Show the form to edit a college
Route::get('/colleges/{college}/edit', [CollegeController::class, 'edit'])->name('colleges.edit');

// Update a college (handle edit form submission)
Route::put('/colleges/{college}', [CollegeController::class, 'update'])->name('colleges.update');

// Delete a college
Route::delete('/colleges/{college}', [CollegeController::class, 'destroy'])->name('colleges.destroy');


// Students Routes
// List all students (with filtering by college)
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Show the form to add a new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Store a new student
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Show the form to edit a student
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

// Update a student
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// Delete a student
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');