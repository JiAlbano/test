<?php

use Illuminate\Support\Facades\Route;

// Your changes


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CourseController;

Route::get('/', [CourseController::class, 'index']);
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');


