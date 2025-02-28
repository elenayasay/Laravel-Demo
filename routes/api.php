<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD routes for students
Route::apiResource('students', StudentController::class);

// Search route with optional ID parameter
Route::get('students/search/{name}/{id?}', [StudentController::class, 'search']);