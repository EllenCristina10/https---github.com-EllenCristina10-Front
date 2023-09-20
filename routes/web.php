<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstrutorController;
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


//Instructors
Route::get('/instrutor', [InstrutorController::class, 'create'])->name('instrutor.create');
// Route::get('/listarinstrutor', [ListarInstrutorController::class, 'index'])->name('listarinstrutor.index');
// Route::get('/editarinstrutor', [EditarInstrutorController::class, 'index'])->name('editarinstrutor.index');

//Lessons
Route::get('/aula', [AulaController::class, 'create'])->name('aula.create');
// Route::get('/editaraula', [EditarAulaController::class, 'index'])->name('editaraula.index');
// Route::get('/listaraula', [ListarAulaController::class, 'index'])->name('listaraula.index');

//Exercises
Route::get('/exercicio', [ExercicioController::class, 'create'])->name('exercicio.create');
// Route::get('/listarexercicio', [ListarExercicioController::class, 'index'])->name('listarexercicio.index');
// Route::get('/editarexercicio', [EditarExercicioController::class, 'index'])->name('editarexercicio.index');

//Reports
Route::get('/relatorio', [RelatorioController::class, 'create'])->name('relatorio.create');
// Route::get('/listarrelatorio', [ListarRelatorioController::class, 'index'])->name('listarrelatorio.index');


