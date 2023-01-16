<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	use HasFactory;

	protected $table = "projets";

	protected $fillable = [
		'libelle_projet',
		'debut_projet',
		'fin_projet',
		'id_enseignant',
	];

	public static function validate()
	{
		request()->validate([
			'projet' => ['required'],
			'debut' => ['required'],
			'fin' => ['required'],
		]);
	}
}
