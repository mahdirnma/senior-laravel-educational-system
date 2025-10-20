<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('student/login', [StudentController::class,'loginForm'])->name('student.login.form');
Route::post('student/login', [StudentController::class,'login'])->name('student.login');
Route::get('teacher/login', [TeacherController::class,'loginForm'])->name('teacher.login.form');
Route::post('teacher/login', [TeacherController::class,'login'])->name('teacher.login');
Route::middleware('auth:students')->group(function () {
    Route::get('student', [StudentController::class,'index'])->name('student.dashboard');
    Route::post('student/logout', [StudentController::class,'logout'])->name('student.logout');
});
Route::middleware('auth:teachers')->group(function () {
    Route::resource('teachers', TeacherController::class);
    Route::post('teacher/logout', [TeacherController::class,'logout'])->name('teacher.logout');
});

