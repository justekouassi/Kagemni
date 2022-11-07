<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Theme;
use App\Models\Projet;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
	public function index()
	{
		$enseignants = Enseignant::all();
		$etudiants = Etudiant::all();
		$themes = Theme::all();
		$projets = Projet::all();

		$requete_super_encadreur = "SELECT * 
			FROM etudiants 
			LEFT JOIN enseignants 
			ON etudiants.id_enseignant=enseignants.id 
			GROUP BY id_enseignant 
			ORDER BY COUNT(id_enseignant) 
			DESC LIMIT 1";

		$super_encadreur = DB::select($requete_super_encadreur);

		$requete_super_chercheur = "SELECT * 
			FROM projets 
			LEFT JOIN enseignants 
			ON projets.id_enseignant=enseignants.id 
			GROUP BY id_enseignant 
			ORDER BY COUNT(id_enseignant) 
			DESC LIMIT 1";
			
		$super_chercheur = DB::select($requete_super_chercheur);

		return view("accueil", [
			'enseignants' => $enseignants,
			'etudiants' => $etudiants,
			'themes' => $themes,
			'projets' => $projets,
			'super_encadreur' => $super_encadreur,
			'super_chercheur' => $super_chercheur,
		]);
	}
}
