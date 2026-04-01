@extends('layouts.app')

@section('title', 'Students | Student Management System')

@section('content')
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2 mb-3">
        <div>
            <h2 class="h3 mb-0 fw-bold">Students</h2>
            <div class="text-muted-2">A complete list of registered students.</div>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('students.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>Add Student
            </a>
        </div>
    </div>

    <div class="app-card p-3 p-lg-4">
        <div class="table-responsive">
            <table class="table align-middle table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Email</th>
                        <th class="text-nowrap">Course</th>
                        <th class="text-nowrap">Enrollment Date</th>
                        <th class="text-nowrap text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td class="fw-semibold">{{ $student->name }}</td>
                            <td class="text-muted-2">{{ $student->email }}</td>
                            <td>{{ $student->course }}</td>
                            <td class="text-muted-2">
                                {{ \Illuminate\Support\Carbon::parse($student->enrollment_date)->format('M d, Y') }}
                            </td>
                            <td class="text-end">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="bi bi-pencil-square me-1"></i>Edit
                                    </a>

                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Delete this student? This action cannot be undone.')">
                                            <i class="bi bi-trash3 me-1"></i>Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-5 text-center">
                                <div class="mb-2 fw-semibold">No students found</div>
                                <div class="text-muted-2 mb-3">Create your first record to get started.</div>
                                <a href="{{ route('students.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg me-1"></i>Add Student
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection