<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ListarAlunoController;
use App\Http\Controllers\InstrutorController;
use App\Http\Controllers\ListarInstrutorController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ListarAulaController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\ListarExercicioController;

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

//Route::get('/', function () {
//    return view('aluno');
//});

Route::get('/', [AlunoController::class, 'index'])->name('home.index');

//Route::get('/home', [AlunoController::class, 'create'])->name('home');

Route::get('/aluno', [AlunoController::class, 'create'])->name('aluno.create');
Route::get('/instrutor', [InstrutorController::class, 'create'])->name('instrutor.create');
Route::get('/aula', [AulaController::class, 'create'])->name('aula.create');
Route::get('/exercicio', [ExercicioController::class, 'create'])->name('exercicio.create');

Route::get('/listaraluno', [ListarAlunoController::class, 'index'])->name('listaraluno.index');
Route::get('/listarinstrutor', [ListarInstrutorController::class, 'index'])->name('listarinstrutor.index');
Route::get('/listaraula', [ListarAulaController::class, 'index'])->name('listaraula.index');
Route::get('/listarexercicio', [ListarExercicioController::class, 'index'])->name('listarexercicio.index');
