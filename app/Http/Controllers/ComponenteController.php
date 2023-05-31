<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    public function criar($id = null)
	{
		return view('cad_comp');
	}

	public function listar()
	{
		return view('listagem_comp');
	}

	public function alterar()
	{
		return view('cad_comp'); 
	}

	public function excluir($id)
	{
		// Exclui um registro
	}
}
 