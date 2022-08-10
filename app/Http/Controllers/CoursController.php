<?php

namespace App\Http\Controllers;

use App\Models\Cours;

class CoursController extends Controller
{
	public function ajouter()
	{
		request()->validate([
			'matiere' => ['required'],
			'date' => ['required'],
			'debut' => ['required'],
			'fin' => ['required'],
			'classe' => ['required'],
			'enseignant' => ['required'],
		]);

		$cours = \App\Models\Cours::create([
			"matiere" => request("matiere"),
			"date_cours" => request("date"),
			"heure_debut" => request("debut"),
			"heure_fin" => request("fin"),
			"id_classe" => request("classe"),
			"id_enseignant" => request("enseignant"),
		]);

		return redirect('/cours');
	}
	
	public function consulter()
	{
		$id = request("id");
		$cours = Cours::where('id', $id)->first();
		return view("cours-edit", [
			'cours' => $cours,
		]);
	}

	public function modifier()
	{
		request()->validate([
			'matiere' => ['required'],
			'date' => ['required'],
			'debut' => ['required'],
			'fin' => ['required'],
			'classe' => ['required'],
			'enseignant' => ['required'],
		]);

		$id = request("id");
		$cours = Cours::where('id', $id)->first();
		$cours->update([
			"matiere" => request("matiere"),
			"date_cours" => request("date"),
			"heure_debut" => request("debut"),
			"heure_fin" => request("fin"),
			"id_classe" => request("classe"),
			"id_enseignant" => request("enseignant"),
		]);

		return redirect('/cours');
	}

	public function supprimer()
	{
		$id = request("id");
		$cours = Cours::where('id', $id)->first();
		$cours->delete();

		return redirect('/cours');
	}
}