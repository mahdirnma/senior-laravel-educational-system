<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('student/login', [StudentController::class,'loginForm'])->name('student.login.form');
Route::post('student/login', [StudentController::class,'login'])->name('student.login');
Route::middleware('auth:students')->group(function () {
    Route::get('student', [StudentController::class,'index'])->name('student.dashboard');
    Route::post('student/logout', [StudentController::class,'logout'])->name('student.logout');
});
