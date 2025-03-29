@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h2 class="mb-0">Welcome to College Management System</h2>
        </div>
        <div class="card-body text-center">
            <div class="d-grid gap-3 col-md-6 mx-auto">
                <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg">
                    Manage Students
                </a>
                <a href="{{ route('colleges.index') }}" class="btn btn-primary btn-lg">
                    Manage Colleges
                </a>
            </div>
        </div>
    </div>
@endsection