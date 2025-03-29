<div class="card shadow-sm">
    <div class="card-header">
        <h2 class="mb-0">@yield('form-title')</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="@yield('form-action')">
            @csrf
            @yield('form-method')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name ?? '') }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $student->phone ?? '') }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', $student->dob ?? '') }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="college_id" class="form-label">College</label>
                    <select class="form-select" id="college_id" name="college_id" required>
                        <option value="">Select College</option>
                        @foreach($colleges as $college)
                            <option value="{{ $college->id }} {{ old('college_id', $student->college_id ?? '') == $college->id ? 'selected' : '' }}">
                                {{ $college->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">@yield('button-text')</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>