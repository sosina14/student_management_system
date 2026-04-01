@extends('layouts.app')

@section('title', 'Home | Student Management System')

@section('content')
    <div class="row g-4 align-items-stretch">
        <div class="col-12">
            <div class="app-card p-4 p-lg-5 overflow-hidden position-relative">
                <div class="row g-4 align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="d-inline-flex align-items-center gap-2 mb-3 text-muted-2">
                            <span class="badge rounded-pill text-bg-light border">
                                <i class="bi bi-shield-check me-1"></i>Formal • Clean • Fast
                            </span>
                        </div>
                        <h1 class="display-6 fw-bold mb-2">Student Management System</h1>
                        <p class="lead text-muted-2 mb-4">
                            Manage student records with a professional workflow—add, review, update, and maintain your data with clarity.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-2">
                            <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}">
                                <i class="bi bi-people me-2"></i>Students List
                            </a>
                            <a class="btn btn-soft btn-lg" href="{{ route('students.create') }}">
                                <i class="bi bi-person-plus me-2"></i>Add Student
                            </a>
                        </div>
                        <div class="mt-4 small text-muted-2">
                            Tip: Use the “Actions” column to edit or remove a record.
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="p-4 rounded-4 border bg-light-subtle">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-3 bg-white border d-inline-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                    <i class="bi bi-journal-text fs-4"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Quick Actions</div>
                                    <div class="small text-muted-2">Common tasks in one place</div>
                                </div>
                            </div>
                            <div class="list-group list-group-flush rounded-3 overflow-hidden border">
                                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="{{ route('students.create') }}">
                                    <span><i class="bi bi-plus-circle me-2"></i>Create a new student</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="{{ route('students.index') }}">
                                    <span><i class="bi bi-table me-2"></i>View students table</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                            <div class="mt-3 small text-muted-2">
                                Designed to be simple, consistent, and production-ready.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

