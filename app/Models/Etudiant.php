<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
	use HasFactory;

	protected $fillable = [
		'id_etudiant',
		'nom_etudiant',
		'prenoms_etudiant',
		'sexe_etudiant',
		'tel_etudiant',
		'email_etudiant',
		'id_classe',
		'id_theme',
	];
}
