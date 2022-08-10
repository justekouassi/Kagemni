<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	use HasFactory;

	protected $fillable = [
		'id_projet',
		'libelle_projet',
		'debut_projet',
		'fin_projet',
		'id_enseignant',
	];
}
