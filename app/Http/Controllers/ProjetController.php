<?php

namespace App\Http\Controllers;

use App\Models\Projet;

class ProjetController extends Controller
{
	public function ajouter()
	{
		Projet::validate();
		Projet::create([
			"libelle_projet" => request("projet"),
			"debut_projet" => request("debut"),
			"fin_projet" => request("fin"),
		]);
		return redirect("/projets");
	}
	
	public function consulter()
	{
		$id = request("id");
		$projet = Projet::where('id', $id)->first();
		return view("projets.projets-edit", [
			'projet' => $projet,
		]);
	}

	public function modifier()
	{
		Projet::validate();
		$id = request("id");
		$projet = Projet::where('id', $id)->first();
		$projet->update([
			"libelle_projet" => request("projet"),
			"debut_projet" => request("debut"),
			"fin_projet" => request("fin"),
		]);
		return redirect("/projets");
	}

	public function supprimer()
	{
		$id = request("id");
		$projet = Projet::where('id', $id)->first();
		$projet->delete();
		return redirect("/projets");
	}
}