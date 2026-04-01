<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

// API routes (prefixed with /api by Laravel)
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);