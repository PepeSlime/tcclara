<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function criar($id)
	{
		return view('cad_turma');
	}

	public function listar()
	{
		return view('listagem_turma');
	}

	public function alterar()
	{
		return view('cad_turma');
	}

	public function excluir($id)
	{
		// Exclui um registro
	}
}
