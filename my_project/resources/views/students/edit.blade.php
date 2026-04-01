@extends('layouts.app')

@section('content')

<h3>Edit Student ✏️</h3>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <input type="text" name="course" class="form-control" value="{{ old('course', $student->course) }}">
        @error('course') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <input type="date" name="enrollment_date" class="form-control" value="{{ old('enrollment_date', $student->enrollment_date) }}">
        @error('enrollment_date') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button class="btn btn-primary">Update</button>
</form>

@endsection