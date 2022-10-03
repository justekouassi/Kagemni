<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Classe;

class ClasseController extends Controller
{
	function index()
	{
		$ecoles_list = DB::table('classes')
			->groupBy('ecole')
			->get();
		return view('classes-create')->with('ecoles_list', $ecoles_list);
	}

	function fetch(Request $request)
	{
		$select = $request->get('select');
		$value = $request->get('value');
		$dependent = $request->get('dependent');
		$data = DB::table('classes')
			->where($select, $value)
			->groupBy($dependent)
			->get();
		$output = '<option value="">Choisir ' . ucfirst($dependent) . '</option>';
		foreach ($data as $row) {
			$output .= '<option value="' . $row->$dependent . '">' . $row->$dependent . '</option>';
		}
		echo $output;
	}

	public function ajouter()
	{
		request()->validate([
			'classe' => ['required'],
			'filiere' => ['required'],
			'ecole' => ['required'],
			'annee' => ['required'],
		]);

		$classe = \App\Models\Classe::create([
			"libelle_classe" => request("classe"),
			"filiere" => request("filiere"),
			"ecole" => request("ecole"),
			"annee_scolaire" => request("annee"),
		]);

		return redirect('/classes');
	}
	
	public function consulter()
	{
		$id = request("id");
		$classe = Classe::where('id', $id)->first();
		return view("classes-edit", [
			'classe' => $classe,
		]);
	}

	public function modifier()
	{
		request()->validate([
			'classe' => ['required'],
			'filiere' => ['required'],
			'ecole' => ['required'],
			'annee' => ['required'],
		]);

		$id = request("id");
		$classe = Classe::where('id', $id)->first();
		$classe->update([
			"libelle_classe" => request("classe"),
			"filiere" => request("filiere"),
			"ecole" => request("ecole"),
			"annee_scolaire" => request("annee"),
		]);

		return redirect('/classes');
	}

	public function supprimer()
	{
		$id = request("id");
		$classe = Classe::where('id', $id)->first();
		$classe->delete();

		return redirect('/classes');
	}
}