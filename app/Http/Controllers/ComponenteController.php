<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Componente;

class ComponenteController extends Controller
{
    public function alterar($id = null)
	{
		$componente = Componente::find($id);

		return view('cad_comp', ['componente' => $componente] );
	}

	public function salvar(Request $request)
	{
		$id = $request->input('id');

		if ($id == null) {
			$componente = new Componente();

		} else {
			$componente = Componente::find($id);
		}

		$componente->nome = $request->input('nome');

		$componente->save();
		return redirect('/componente/listagem');

	}

	public function listar()
	{
		$componentes = Componente::all();

		return view('listagem_comp', ['componentes' => $componentes]);
	}

	public function criar()
	{
		return view('cad_comp', ['componente' => null]); 
	}

	public function excluir($id)
	{
		// Exclui um registro
	}
}
 