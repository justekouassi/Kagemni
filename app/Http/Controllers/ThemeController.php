<?php

namespace App\Http\Controllers;

use App\Models\Theme;

class ThemeController extends Controller
{
	public function ajouter()
	{
		request()->validate([
			'theme' => ['required'],
		]);

		$theme = \App\Models\Theme::create([
			"libelle_theme" => request("theme"),
		]);

		return view("themes");
	}

	public function consulter()
	{
		$id = request("id");
		$theme = Theme::where('id', $id)->first();
		return view("themes-edit", [
			'theme' => $theme,
		]);
	}

	public function modifier()
	{
		request()->validate([
			'theme' => ['required'],
		]);

		$id = request("id");
		$theme = Theme::where('id', $id)->first();
		$theme->update([
			"libelle_theme" => request("theme"),
		]);

		return view("themes");
	}

	public function supprimer()
	{
		$id = request("id");
		$theme = Theme::where('id', $id)->first();
		$theme->delete();

		return view("themes");
	}
}