<?php

namespace App\Http\Controllers;

use App\Models\Matiere;

class MatiereController extends Controller
{
	public function ajouter()
	{
		request()->validate([
			'nom' => ['required'],
			'prenom' => ['required'],
			'sexe' => [],
			'tel' => [],
			'email' => ['email'],
		]);

		$matiere = \App\Models\Matiere::create([
			"nom_matiere" => request("nom"),
			"prenoms_matiere" => request("prenom"),
			"sexe_matiere" => request("sexe"),
			"tel_matiere" => request("tel"),
			"email_matiere" => request("email"),
		]);

		return redirect("/matieres");
	}
	
	public function consulter()
	{
		$id = request("id");
		$matiere = Matiere::where('id', $id)->first();
		return view("matieres-edit", [
			'matiere' => $matiere,
		]);
	}

	public function modifier()
	{
		request()->validate([
			'nom' => ['required'],
			'prenom' => ['required'],
			'sexe' => ['required'],
			'tel' => ['required'],
			'email' => ['required', 'email'],
		]);

		$id = request("id");
		$matiere = matiere::where('id', $id)->first();
		$matiere->update([
			"nom_matiere" => request("nom"),
			"prenoms_matiere" => request("prenom"),
			"sexe_matiere" => request("sexe"),
			"tel_matiere" => request("tel"),
			"email_matiere" => request("email"),
		]);

		return redirect("/matieres");
	}

	public function supprimer()
	{
		$id = request("id");
		$matiere = matiere::where('id', $id)->first();
		$matiere->delete();

		return redirect("/matieres");
	}
}