<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
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

		$etudiant = \App\Models\Etudiant::create([
			"nom_etudiant" => request("nom"),
			"prenoms_etudiant" => request("prenom"),
			"sexe_etudiant" => request("sexe"),
			"tel_etudiant" => request("tel"),
			"email_etudiant" => request("email"),
		]);

		return view("etudiants");
	}

	public function modifier()
	{
	}

	public function supprimer()
	{
	}
}
