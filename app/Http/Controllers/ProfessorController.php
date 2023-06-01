<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;


class ProfessorController extends Controller
{
    public function criar($id = null)
	{
		$professor = Professor::all($id);

		return view('cad_prof', ['professor' => $professor]);
	}

	public function listar()
	{
		$professores = Professor::all();

		return view('listagem_prof', ['professores' => $professores]);

	}

	public function alterar()
	{
		return view('cad_prof');
	}

	public function excluir($id)
	{
		// Exclui um registro
	}
}
