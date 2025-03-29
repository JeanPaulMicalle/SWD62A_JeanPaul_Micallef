<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Student;

class CollegeController extends Controller
{
    // List all colleges
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    // Show the form to add a new college
    public function create()
    {
        return view('colleges.create');
    }

    // Delete a college
    public function destroy(College $college)
    {
        $college->delete();
        return redirect()->route('colleges.index');
    }

    // Show the form to edit a college
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    public function update(Request $request, College $college)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255'
        ]);

        $college->update($validatedData);

        return redirect()->route('colleges.index')->with('success', 'College updated successfully');
    }

    // Handle new college creation form submission
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:colleges,name',
            'address' => 'required|string|max:255'
        ]);
    
        College::create($validatedData);
    
        return redirect()->route('colleges.index')->with('success', 'College created successfully');
    }
}
