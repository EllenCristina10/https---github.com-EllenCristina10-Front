<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Site
Route::get('/', [SiteController::class, 'index'])->name('home.index');


//Students
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

//Instructors
Route::get('/instructor', [InstructorController::class, 'index'])->name('instructor.index');
Route::get('/instructor/create', [InstructorController::class, 'create'])->name('instructor.create');
Route::post('/instructor', [InstructorController::class, 'store'])->name('instructor.store');
Route::get('/instructor/{id}/edit', [InstructorController::class, 'edit'])->name('instructor.edit');
Route::delete('/instructor/{id}', [InstructorController::class, 'destroy'])->name('instructor.destroy');

// Route::get('/listarinstrutor', [ListarInstrutorController::class, 'index'])->name('listarinstrutor.index');
// Route::get('/editarinstrutor', [EditarInstrutorController::class, 'index'])->name('editarinstrutor.index');

//Lessons
Route::get('/lesson', [AulaController::class, 'index'])->name('lesson.index');
Route::get('/lesson/create', [AulaController::class, 'create'])->name('lesson.create');
Route::post('/lesson', [AulaController::class, 'store'])->name('lesson.store');
Route::get('/lesson/{id}/edit', [AulaController::class, 'edit'])->name('lesson.edit');
Route::delete('/lesson/{id}', [AulaController::class, 'destroy'])->name('lesson.destroy');
// Route::get('/editaraula', [EditarAulaController::class, 'index'])->name('editaraula.index');
// Route::get('/listaraula', [ListarAulaController::class, 'index'])->name('listaraula.index');

//Exercises
Route::get('/exercise', [ExercicioController::class, 'index'])->name('exercise.index');
Route::get('/exercise/create', [ExercicioController::class, 'create'])->name('exercise.create');
Route::post('/exercise', [ExercicioController::class, 'store'])->name('exercise.store');
Route::get('/exercise/{id}/edit', [ExercicioController::class, 'edit'])->name('exercise.edit');
Route::delete('/exercise/{id}', [ExercicioController::class, 'destroy'])->name('exercise.destroy');

//Reports
Route::get('/report', [RelatorioController::class, 'index'])->name('report.index');
Route::get('/report/create', [RelatorioController::class, 'create'])->name('report.create');