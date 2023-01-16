<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
	use HasFactory;

	protected $table = "etudiants";

	protected $fillable = [
		'nom_etudiant',
		'prenoms_etudiant',
		'sexe_etudiant',
		'tel_etudiant',
		'email_etudiant',
		'id_classe',
		'id_enseignant',
	];

	public static function validate()
	{
		request()->validate([
			'nom' => ['required'],
			'prenom' => ['required'],
			'sexe' => ['required'],
			'tel' => ['required'],
			'email' => ['email'],
		]);
	}
}
