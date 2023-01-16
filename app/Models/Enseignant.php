<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
	use HasFactory;

	protected $table = "enseignants";

	protected $fillable = [
		'nom_enseignant',
		'prenoms_enseignant',
		'sexe_enseignant',
		'tel_enseignant',
		'email_enseignant',
	];

	public static function validate()
	{
		request()->validate([
			'nom' => ['required'],
			'prenom' => ['required'],
			'sexe' => ['required'],
			'tel' => ['required'],
			'email' => ['required', 'email'],
		]);
	}
}
