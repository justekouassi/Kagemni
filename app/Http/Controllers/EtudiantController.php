<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;

class EtudiantController extends Controller
{
	public function ajouter()
	{
		Etudiant::validate();
		Etudiant::create([
			"nom_etudiant" => request("nom"),
			"prenoms_etudiant" => request("prenom"),
			"sexe_etudiant" => request("sexe"),
			"tel_etudiant" => request("tel"),
			"email_etudiant" => request("email"),
		]);
		return redirect("/etudiants");
	}

	public function consulter()
	{
		$id = request("id");
		$etudiant = Etudiant::where('id', $id)->first();
		return view("etudiants.etudiants-edit", [
			'etudiant' => $etudiant,
		]);
	}

	public function modifier()
	{
		Etudiant::validate();
		$id = request("id");
		$etudiant = Etudiant::where('id', $id)->first();
		$etudiant->update([
			"nom_etudiant" => request("nom"),
			"prenoms_etudiant" => request("prenom"),
			"sexe_etudiant" => request("sexe"),
			"tel_etudiant" => request("tel"),
			"email_etudiant" => request("email"),
		]);
		return redirect("/etudiants");
	}

	public function supprimer()
	{
		$id = request("id");
		$etudiant = Etudiant::where('id', $id)->first();
		$etudiant->delete();
		return redirect("/etudiants");
	}
}