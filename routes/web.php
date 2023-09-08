<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\InstrutorController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ExercicioController;

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

