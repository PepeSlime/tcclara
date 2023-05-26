<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function criar()
	{
		return view('cad_prof');
	}

	public function listar()
	{
        return view('listagem_prof');
	}

	public function alterar()
	{
		return view('cad_prof');
	}

	public function excluir()
	{
		// Exclui um registro
	}
}
