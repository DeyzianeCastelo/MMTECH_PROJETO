<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/funcionarios/novo', [FuncionariosController::class, 'create']);
Route::post('/funcionarios/novo', [FuncionariosController::class, 'store'])->name('registrar_funcionario');
Route::get('/funcionarios/listar', [FuncionariosController::class, 'index']);
Route::get('/funcionario/editar/{id}', [FuncionariosController::class, 'edit']);
Route::post('/funcionario/editar/{id}', [FuncionariosController::class, 'update'])->name('alterar_funcionario');
Route::get('/funcionario/excluir/{id}', [FuncionariosController::class, 'delete']);
Route::post('/funcionario/excluir/{id}', [FuncionariosController::class, 'destroy'])->name('excluir_funcionario');
