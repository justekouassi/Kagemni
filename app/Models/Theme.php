<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
	use HasFactory;

	protected $fillable = [
		'libelle_theme',
		'id_etudiant',
	];

	public static function validate()
	{
		request()->validate([
			'theme' => ['required'],
			'etudiant' => ['required'],
		]);
	}
}
