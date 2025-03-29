@extends('layouts.app')

@section('title', 'Edit College')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h2 class="mb-0">Edit College: {{ $college->name }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('colleges.update', $college) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">College Name</label>
                    <input type="text" class="form-control" id="name" name="name" 
                           value="{{ $college->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" 
                           value="{{ $college->address }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update College</button>
                <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection