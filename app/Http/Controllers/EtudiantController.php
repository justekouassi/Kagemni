<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;

class EtudiantController extends Controller
{
	public function ajouter()
	{
		request()->validate([
			'nom' => ['required'],
			'prenom' => ['required'],
			'sexe' => ['required'],
			'tel' => ['required'],
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

	public function consulter()
	{
		$id = request("id");
		$etudiant = Etudiant::where('id', $id)->first();
		return view("etudiants-edit", [
			'etudiant' => $etudiant,
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
		$etudiant = Etudiant::where('id', $id)->first();
		$etudiant->update([
			"nom_etudiant" => request("nom"),
			"prenoms_etudiant" => request("prenom"),
			"sexe_etudiant" => request("sexe"),
			"tel_etudiant" => request("tel"),
			"email_etudiant" => request("email"),
		]);

		return view("etudiants");
	}

	public function supprimer()
	{
		$id = request("id");
		$etudiant = Etudiant::where('id', $id)->first();
		$etudiant->delete();

		return view("etudiants");
	}
}