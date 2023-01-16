<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
	use HasFactory;

	protected $table = "classes";

	protected $fillable = [
		'libelle_classe',
		'filiere',
		'ecole',
		'annee_scolaire',
	];

	public static function validate()
	{
		request()->validate([
			'classe' => ['required'],
			'filiere' => ['required'],
			'ecole' => ['required'],
			'annee' => ['required'],
		]);
	}
}
