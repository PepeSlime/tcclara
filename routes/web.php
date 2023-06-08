<?php

use App\Http\Controllers\ComponenteController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'login']);
Route::post('/', [LoginController::class, 'logar']);


Route::get('/componente/cadastro', [ComponenteController::class, 'criar']);
Route::get('/componente/edicao/{id}', [ComponenteController::class, 'alterar']);
Route::get('/componente/listagem', [ComponenteController::class, 'listar']);
Route::get('/componente/excluir/{id}', [ComponenteController::class, 'excluir']);
Route::post('/componente/salvar', [ComponenteController::class, 'salvar']);


Route::get('/professor/cadastro', [ProfessorController::class, 'criar']);
Route::get('/professor/edicao/{id}', [ProfessorController::class, 'alterar']);
Route::get('/professor/listagem', [ProfessorController::class, 'listar']);
Route::get('/professor/excluir/{id}', [ProfessorController::class, 'excluir']);
Route::post('/professor/salvar', [ProfessorController::class, 'salvar']);


Route::get('/turma/cadastro', [TurmaController::class, 'criar']);
Route::get('/turma/edicao/{id}', [TurmaController::class, 'alterar']);
Route::get('/turma/listagem', [TurmaController::class, 'listar']);
Route::get('/turma/excluir/{id}', [TurmaController::class, 'excluir']);
Route::post('/turma/salvar', [TurmaController::class, 'salvar']);


Route::get('/inicio', [LoginController::class, 'inicio']);


Route::get('/horario/{id_turma}', [HorarioController::class, 'listar']);
Route::post('/horario/{id_turma}', [HorarioController::class, 'associacao']);