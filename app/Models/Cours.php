<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
	use HasFactory;

	protected $fillable = [
		'matiere',
		'date_cours',
		'heure_debut',
		'heure_fin',
		'id_classe',
		'id_enseignant',
	];

	public static function validate()
	{
		request()->validate([
			'matiere' => ['required'],
			'date' => ['required'],
			'debut' => ['required'],
			'fin' => ['required'],
			'classe' => ['required'],
			'enseignant' => ['required'],
		]);
	}
}
