<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseignantController extends Controller
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

		$enseignant = \App\Models\Enseignant::create([
			"nom_enseignant" => request("nom"),
			"prenoms_enseignant" => request("prenom"),
			"sexe_enseignant" => request("sexe"),
			"tel_enseignant" => request("tel"),
			"email_enseignant" => request("email"),
		]);

		return view("enseignants");
	}

	public function modifier()
	{
	}

	public function supprimer()
	{
	}
}
