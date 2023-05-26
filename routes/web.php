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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/componente/cadastro', function () {
    return view('cad_comp');
});


Route::get('/professor/cadastro', function () {
    return view('cad_prof');
});

Route::get('/turma/cadastro', function () {
    return view('cad_turma');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/componente/listagem', function () {
    return view('listagem_comp');
});

Route::get('/professor/listagem', function () {
    return view('listagem_prof');
});

Route::get('/turma/listagem', function () {
    return view('listagem_turma');
});

Route::get('/horario', function () {
    return view('horario');
});

