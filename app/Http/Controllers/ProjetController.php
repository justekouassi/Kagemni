<?php

namespace App\Http\Controllers;

use App\Models\Projet;

class ProjetController extends Controller
{
	public function ajouter()
	{
		request()->validate([
			'projet' => ['required'],
			'debut' => ['required'],
			'fin' => ['required'],
		]);

		$projet = \App\Models\projet::create([
			"libelle_projet" => request("projet"),
			"debut_projet" => request("debut"),
			"fin_projet" => request("fin"),
		]);

		return view("projets");
	}
	
	public function consulter()
	{
		$id = request("id");
		$projet = Projet::where('id', $id)->first();
		return view("projets-edit", [
			'projet' => $projet,
		]);
	}

	public function modifier()
	{
		request()->validate([
			'projet' => ['required'],
			'debut' => ['required'],
			'fin' => ['required'],
		]);

		$id = request("id");
		$projet = Projet::where('id', $id)->first();
		$projet->update([
			"libelle_projet" => request("projet"),
			"debut_projet" => request("debut"),
			"fin_projet" => request("fin"),
		]);

		return view("projets");
	}

	public function supprimer()
	{
		$id = request("id");
		$projet = Projet::where('id', $id)->first();
		$projet->delete();

		return view("projets");
	}
}