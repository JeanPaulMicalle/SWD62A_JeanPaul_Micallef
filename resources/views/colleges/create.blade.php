@extends('layouts.app')

@section('title', 'Create College')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h2 class="mb-0">Add New College</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('colleges.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">College Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Save College</button>
            </form>
        </div>
    </div>
@endsection