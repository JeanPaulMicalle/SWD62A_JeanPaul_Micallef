@extends('layouts.app')

@section('title', 'Colleges List')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <a href="{{ url('/') }}" class="btn btn-sm btn-secondary me-2">Home</a>
                <h2 class="mb-0 d-inline-block">Colleges</h2>
            </div>
            <a href="{{ route('colleges.create') }}" class="btn btn-primary">
                Add College
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($colleges as $college)
                            <tr>
                                <td>{{ $college->name }}</td>
                                <td>{{ $college->address }}</td>
                                <td>
                                    <a href="{{ route('colleges.edit', $college) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('colleges.destroy', $college) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this college?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection