<?php

namespace App\Http\Controllers;

use App\Models\Classe;

class ClasseController extends Controller
{
	public function ajouter()
	{
		request()->validate([
			'classe' => ['required'],
			'filiere' => ['required'],
			'ecole' => ['required'],
			'annee' => ['required'],
		]);

		$classe = \App\Models\Classe::create([
			"libelle_classe" => request("classe"),
			"filiere" => request("filiere"),
			"ecole" => request("ecole"),
			"annee_scolaire" => request("annee"),
		]);

		return redirect('/classes');
	}
	
	public function consulter()
	{
		$id = request("id");
		$classe = Classe::where('id', $id)->first();
		return view("classes-edit", [
			'classe' => $classe,
		]);
	}

	public function modifier()
	{
		request()->validate([
			'classe' => ['required'],
			'filiere' => ['required'],
			'ecole' => ['required'],
			'annee' => ['required'],
		]);

		$id = request("id");
		$classe = Classe::where('id', $id)->first();
		$classe->update([
			"libelle_classe" => request("classe"),
			"filiere" => request("filiere"),
			"ecole" => request("ecole"),
			"annee_scolaire" => request("annee"),
		]);

		return redirect('/classes');
	}

	public function supprimer()
	{
		$id = request("id");
		$classe = Classe::where('id', $id)->first();
		$classe->delete();

		return redirect('/classes');
	}
}