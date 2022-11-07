<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;

class EnseignantController extends Controller
{
	public function ajouter()
	{
		Enseignant::validate();

		Enseignant::create([
			"nom_enseignant" => request("nom"),
			"prenoms_enseignant" => request("prenom"),
			"sexe_enseignant" => request("sexe"),
			"tel_enseignant" => request("tel"),
			"email_enseignant" => request("email"),
		]);

		return redirect('/enseignants');
	}

	public function consulter()
	{
		$id = request("id");
		$enseignant = Enseignant::where('id', $id)->first();
		return view("enseignants.enseignants-edit", [
			'enseignant' => $enseignant,
		]);
	}

	public function modifier()
	{
		Enseignant::validate();

		$id = request("id");
		$enseignant = Enseignant::where('id', $id)->first();
		$enseignant->update([
			"nom_enseignant" => request("nom"),
			"prenoms_enseignant" => request("prenom"),
			"sexe_enseignant" => request("sexe"),
			"tel_enseignant" => request("tel"),
			"email_enseignant" => request("email"),
		]);

		return redirect('/enseignants');
	}

	public function supprimer()
	{
		$id = request("id");
		$enseignant = Enseignant::where('id', $id)->first();
		$enseignant->delete();

		return redirect('/enseignants');
	}
}
