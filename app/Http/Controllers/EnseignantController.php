<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;

class EnseignantController extends Controller
{
	public function ajouter()
	{
		request()->validate([
			'nom' => ['required'],
			'prenom' => ['required'],
			'sexe' => ['required'],
			'tel' => ['required'],
			'email' => ['required', 'email'],
		]);

		$enseignant = \App\Models\Enseignant::create([
			"nom_enseignant" => request("nom"),
			"prenoms_enseignant" => request("prenom"),
			"sexe_enseignant" => request("sexe"),
			"tel_enseignant" => request("tel"),
			"email_enseignant" => request("email"),
		]);

		return view("enseignants");
	}

	public function consulter()
	{
		$id = request("id");
		$enseignant = Enseignant::where('id', $id)->first();
		return view("enseignants-edit", [
			'enseignant' => $enseignant,
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
		$enseignant = Enseignant::where('id', $id)->first();
		$enseignant->update([
			"nom_enseignant" => request("nom"),
			"prenoms_enseignant" => request("prenom"),
			"sexe_enseignant" => request("sexe"),
			"tel_enseignant" => request("tel"),
			"email_enseignant" => request("email"),
		]);

		return view("enseignants");
	}

	public function supprimer()
	{
		$id = request("id");
		$enseignant = Enseignant::where('id', $id)->first();
		$enseignant->delete();

		return view("enseignants");
	}
}
