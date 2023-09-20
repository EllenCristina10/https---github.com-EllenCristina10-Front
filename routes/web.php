<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\EditarAlunoController;
use App\Http\Controllers\ListarAlunoController;
use App\Http\Controllers\InstrutorController;
use App\Http\Controllers\EditarInstrutorController;
use App\Http\Controllers\ListarInstrutorController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\EditarAulaController;
use App\Http\Controllers\ListarAulaController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\EditarExercicioController;
use App\Http\Controllers\ListarExercicioController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\ListarRelatorioController;
use App\Http\Controllers\EditarRelatorioController;

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
Route::get('/relatorio', [RelatorioController::class, 'create'])->name('relatorio.create');


Route::get('/listaraluno', [ListarAlunoController::class, 'index'])->name('listaraluno.index');
Route::get('/listarinstrutor', [ListarInstrutorController::class, 'index'])->name('listarinstrutor.index');
Route::get('/listaraula', [ListarAulaController::class, 'index'])->name('listaraula.index');
Route::get('/listarexercicio', [ListarExercicioController::class, 'index'])->name('listarexercicio.index');
Route::get('/listarrelatorio', [ListarRelatorioController::class, 'index'])->name('listarrelatorio.index');

Route::get('/editaraluno', [EditarAlunoController::class, 'index'])->name('editaraluno.index');
Route::get('/editarinstrutor', [EditarInstrutorController::class, 'index'])->name('editarinstrutor.index');
Route::get('/editaraula', [EditarAulaController::class, 'index'])->name('editaraula.index');
Route::get('/editarexercicio', [EditarExercicioController::class, 'index'])->name('editarexercicio.index');
Route::get('/editarrelatorio', [EditarRelatorioController::class, 'index'])->name('editarrelatorio.index');