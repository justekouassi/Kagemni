<?php

namespace App\Http\Controllers;

use App\Models\Cours;

class CoursController extends Controller
{
	public function ajouter()
	{
		Cours::validate();
		Cours::create([
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
		return view("cours.cours-edit", [
			'cours' => $cours,
		]);
	}

	public function modifier()
	{
		Cours::validate();
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