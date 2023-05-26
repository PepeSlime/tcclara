<?php

use App\Http\Controllers\ComponenteController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'logar']);


Route::get('/componente/cadastro', [ComponenteController::class, 'criar']);
Route::get('/componente/edicao', [ComponenteController::class, 'criar']);
Route::get('/componente/listagem', [ComponenteController::class, 'listar']);


Route::get('/professor/cadastro', [ProfessorController::class, 'criar']);
Route::get('/professor/edicao', [ProfessorController::class, 'criar']);
Route::get('/professor/listagem', [ProfessorController::class, 'listar']);


Route::get('/turma/cadastro', [TurmaController::class, 'criar']);
Route::get('/turma/edicao', [TurmaController::class, 'criar']);
Route::get('/turma/listagem', [TurmaController::class, 'listar']);




Route::get('/horario', [HorarioController::class, 'listar']);
