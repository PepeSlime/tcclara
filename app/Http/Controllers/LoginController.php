<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function login()
	{
		return view('login');
	}

	public function logar(Request $request)
	{
		$senha = $request->input('senha');
		if ($senha == 123456) {
			return redirect('/inicio');

		} else {
			print("senha incorreta");
		}
	}

	public function inicio()
	{
		return view('inicio');
	}
}


