@extends('layouts.app')

@section('title', 'Add Student | Student Management System')

@section('content')
    <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
        <div>
            <h2 class="h3 mb-0 fw-bold">Add Student</h2>
            <div class="text-muted-2">Create a new student record.</div>
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Back to List
        </a>
    </div>

    <div class="app-card p-3 p-lg-4">
        <form action="{{ route('students.store') }}" method="POST" class="row g-3">
            @csrf

            <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}" placeholder="Full name">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" placeholder="name@example.com">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Course</label>
                <input type="text" name="course" class="form-control @error('course') is-invalid @enderror"
                       value="{{ old('course') }}" placeholder="e.g., Computer Science">
                @error('course') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Enrollment Date</label>
                <input type="date" name="enrollment_date" class="form-control @error('enrollment_date') is-invalid @enderror"
                       value="{{ old('enrollment_date') }}">
                @error('enrollment_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 d-flex justify-content-end gap-2 pt-2">
                <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check2-circle me-1"></i>Save Student
                </button>
            </div>
        </form>
    </div>
@endsection

