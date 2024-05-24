<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Profesor
Route::get('teacher/index',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('teacher/{teacher}',[TeacherController::class,'show'])->name('teacher.show');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');

//Estudiante
Route::get('student/index',[StudentController::class,'index'])->name('student.index');
Route::get('student/create',[StudentController::class,'create']);
Route::post('student/store',[StudentController::class,'store'])->name('student.store');
Route::get('student/{student}',[StudentController::class,'show'])->name('student.show');
Route::put('student/{student}',[StudentController::class,'update'])->name('student.update');
Route::delete('student/{student}',[StudentController::class,'destroy'])->name('student.destroy');
Route::get('student/{student}/editar',[StudentController::class,'edit'])->name('student.edit');
