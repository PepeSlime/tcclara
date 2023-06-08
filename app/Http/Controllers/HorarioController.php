<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use App\Models\Horario;
use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function associacao(Request $form) 
	{ 
        $professor = $form->input('prof');
		$componente = $form->input('comp');
		$turma = $form->input('turma');
		$horarioi = $form->input('hi');
		$horariof = $form->input('hf');
		$dia_da_semana = $form->input('dds');

		$registro = Horario::where("id_turma","=", $turma)
		->where("hora_inicio","=", "$horarioi:00")
		->where("hora_fim","=", "$horariof:00")
		->where("dia_da_semana","=", $dia_da_semana)
		->first();

		if ($registro === null) {
			 $registro = new Horario;
		}

		$registro->id_turma = $turma;
		$registro->id_componente = $componente;
		$registro->id_professor = $professor;
		$registro->hora_inicio = $horarioi;
		$registro->hora_fim = $horariof;
		$registro->dia_da_semana = $dia_da_semana;
		$registro->save();

		return redirect("/horario/$turma");
	}
	

	public function listar(int $id)
	{
		$dias_da_semana = [
			"Segunda-feira",
			"Terça-feira",
			"Quarta-feira",
			"Quinta-feira",
			"Sexta-feira",
		];

		$cronograma =[
			["07:10", "08:00"],
			["08:00", "08:50"],
			["08:50", "09:40"],
			["09:40", "10:00"],
			["10:00", "10:50"],
			["10:50", "11:40"],
			["11:40", "12:30"],
			["12:30", "13:20"],
			["13:20", "14:10"],
			["14:10", "15:00"],
		];

		$componentes = Componente::all();
		$professores = Professor::all();
		$turma = Turma::find($id);

		return view('horario', [
			"dias_da_semana" => $dias_da_semana,
			"cronograma" => $cronograma,
			"professores" => $professores,
			"componentes" => $componentes,
			"turma" => $turma,
		]);
	}

	
}
