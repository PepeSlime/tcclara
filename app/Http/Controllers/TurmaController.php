<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;


class TurmaController extends Controller
{
	public function criar($id = null)
	{
		$turma = Turma::find($id);

		return view('cad_turma', ['turma' => $turma]);
	}

	public function cadastrar_turma(Request $request)
	{
		$turma = $request->input('turma');
	}

	public function listar()
	{
		$turmas = Turma::all();

		return view('listagem_turma', ['turmas' => $turmas]);
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
