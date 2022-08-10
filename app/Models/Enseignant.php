<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
	use HasFactory;

	protected $fillable = [
		'id_enseignant',
		'nom_enseignant',
		'prenoms_enseignant',
		'sexe_enseignant',
		'tel_enseignant',
		'email_enseignant',
	];
}
