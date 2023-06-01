<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Componente;

class ComponenteController extends Controller
{
    public function criar($id = null)
	{
		$componente = Componente::find($id);

		return view('cad_comp', ['componente' => $componente] );
	}

	public function listar()
	{
		$componente = Componente::all();

		return view('listagem_comp', ['componente' => $componente]);
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
 