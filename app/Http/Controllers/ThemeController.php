<?php

namespace App\Http\Controllers;

use App\Models\Theme;

class ThemeController extends Controller
{
	public function ajouter()
	{
		Theme::validate();
		Theme::create([
			"libelle_theme" => request("theme"),
			"id_etudiant" => request("etudiant"),
		]);
		return redirect("/themes");
	}

	public function consulter()
	{
		$id = request("id");
		$theme = Theme::where('id', $id)->first();
		return view("themes.themes-edit", [
			'theme' => $theme,
		]);
	}

	public function modifier()
	{
		Theme::validate();
		$id = request("id");
		$theme = Theme::where('id', $id)->first();
		$theme->update([
			"libelle_theme" => request("theme"),
			"id_etudiant" => request("etudiant"),
		]);
		return redirect("/themes");
	}

	public function supprimer()
	{
		$id = request("id");
		$theme = Theme::where('id', $id)->first();
		$theme->delete();
		return redirect("/themes");
	}
}