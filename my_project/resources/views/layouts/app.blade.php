<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light">

    <title>@yield('title', 'Student Management System')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root{
            --app-bg: #f6f7fb;
            --app-card: #ffffff;
            --app-border: rgba(17, 24, 39, 0.10);
            --app-text: #0f172a;
            --app-muted: #64748b;
            --app-navy: #0b1b33;
        }
        body { font-family: "Source Sans 3", system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif; background: var(--app-bg); color: var(--app-text); }
        .app-navbar { background: linear-gradient(135deg, var(--app-navy), #12325a); }
        .app-brand { letter-spacing: .2px; }
        .app-brand-badge { background: rgba(255,255,255,.12); border: 1px solid rgba(255,255,255,.18); }
        .app-shell { min-height: calc(100vh - 56px); }
        .app-card { background: var(--app-card); border: 1px solid var(--app-border); border-radius: 1rem; box-shadow: 0 10px 30px rgba(2, 6, 23, 0.06); }
        .table thead th { font-weight: 600; letter-spacing: .2px; }
        .table-hover tbody tr { transition: background-color .15s ease; }
        .btn { border-radius: .85rem; }
        .btn-soft { background: rgba(13, 110, 253, 0.08); border-color: rgba(13, 110, 253, 0.15); color: #0b5ed7; }
        .btn-soft:hover { background: rgba(13, 110, 253, 0.12); border-color: rgba(13, 110, 253, 0.22); }
        .text-muted-2 { color: var(--app-muted) !important; }
        .footer-link { color: rgba(255,255,255,.75); text-decoration: none; }
        .footer-link:hover { color: rgba(255,255,255,1); text-decoration: underline; }
    </style>

    @stack('head')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark app-navbar border-bottom border-light border-opacity-10">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 app-brand" href="{{ url('/') }}">
            <span class="d-inline-flex align-items-center justify-content-center rounded-3 px-2 py-1 app-brand-badge">
                <i class="bi bi-mortarboard-fill"></i>
            </span>
            <span class="fw-semibold">Student Management System</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#appNavbar" aria-controls="appNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="appNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="{{ route('students.index') }}">Students List</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-sm btn-light fw-semibold" href="{{ route('students.create') }}">
                        <i class="bi bi-plus-lg me-1"></i>Add Student
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="app-shell py-4 py-lg-5">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show app-card border-0 mb-4" role="alert">
                <div class="d-flex gap-2 align-items-start">
                    <i class="bi bi-check-circle-fill mt-1"></i>
                    <div class="flex-grow-1">{{ session('success') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @yield('content')
    </div>
</main>

<footer class="py-4 mt-auto app-navbar">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-2 text-white">
            <div class="small opacity-75">
                © {{ date('Y') }} Student Management System
            </div>
            <div class="small d-flex gap-3">
                <a class="footer-link" href="{{ url('/') }}">Home</a>
                <a class="footer-link" href="{{ route('students.index') }}">Students</a>
                <a class="footer-link" href="{{ route('students.create') }}">Add Student</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>