<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


// Student routes
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');

// Welcome route
Route::get('/', function () {
    return view('welcome');
});
