<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
