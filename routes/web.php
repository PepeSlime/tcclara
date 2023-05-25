<?php

use Illuminate\Support\Facades\Route;

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


    


Route::get('/', [LoginController::class, 'logar']);



Route::get('/componente/cadastro', [ComponentController::class, 'criar']);


Route::get('/professor/cadastro', function () {
    return view('cad_prof');
});

Route::get('/professor/cadastro', [ProfessorController::class, 'criar']);



Route::get('/turma/cadastro', function () {
    return view('cad_turma');
});

Route::get('/turma/cadastro', [TurmaController::class, 'criar']);




Route::get('/login', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'logar']);




Route::get('/componente/listagem', function () {
    return view('listagem_comp');
});

Route::get('/componente/listagem', [ComponenteController::class, 'Listar']);





Route::get('/professor/listagem', function () {
    return view('listagem_prof');
});

Route::get('/componente/listagem', [ComponenteController::class, 'Listar']);




Route::get('/turma/listagem', function () {
    return view('listagem_turma');
});
Route::get('/turma/listagem', [TurmaController::class, 'Listar']);




Route::get('/horario', function () {
    return view('horario');
});
Route::get('/horario', [HorarioController::class, 'Listar']);
