<div class="card shadow-sm">
    <div class="card-header">
        <h2 class="mb-0">@yield('form-title')</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="@yield('form-action')">
            @csrf
            @yield('form-method')

            <div class="mb-3">
                <label for="name" class="form-label">College Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $college->name ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $college->address ?? '') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">@yield('button-text')</button>
            <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>