<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;


class ProfessorController extends Controller
{
	public function alterar($id)
	{
		$professor = Professor::find($id);

		return view('cad_prof', ['professor' => $professor]);
	}

	public function salvar(Request $request)
	{
		$id = $request->input('id');
		
		
		if ($id == null) {
			$professor = new Professor();

		} else {
			$professor = Professor::find($id);
		}

		$professor->nome = $request->input('nome');
		$professor->email = $request->input('email');
		$professor->telefone = $request->input('telefone');

		$professor->save();
		return redirect('/professor/listagem');
	}

	public function listar()
	{
		$professores = Professor::all();

		return view('listagem_prof', ['professores' => $professores]);
	}

	public function criar()
	{
		return view('cad_prof', ['professor' => null]);
	}

	public function excluir($id)
	{
		// Exclui um registro
	}
}
