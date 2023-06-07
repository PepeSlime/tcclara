<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;


class TurmaController extends Controller
{
	public function alterar($id = null)
	{
		$turma = Turma::find($id);

		return view('cad_turma', ['turma' => $turma]);
	}

	public function salvar(Request $request)
	{
		$id = $request->input('id');

		if ($id == null) {
			$turma = new Turma();
		} else {
			$turma = Turma::find($id);

		}

	
		$turma-> nome = $request->input('turma');

		$turma->save();
		return redirect('/turma/listagem');
	}

	public function listar()
	{
		$turmas = Turma::all();

		return view('listagem_turma', ['turmas' => $turmas]);
	}

	public function criar()
	{
		return view('cad_turma', ['turma' => null]);
	}

	public function excluir($id)
	{
		// Exclui um registro
	}
}
