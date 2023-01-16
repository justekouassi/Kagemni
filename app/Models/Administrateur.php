<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Administrateur extends Model implements Authenticatable {
	use BasicAuthenticatable;

	protected $table = "administrateurs";

	protected $fillable = [
		'email_admin',
		'motdepasse_admin',
		'role',
		'avatar',
	];

	public static function validate()
	{
		request()->validate([
			'theme' => ['required'],
			'etudiant' => ['required'],
		]);
	}

	public function getAuthPassword() {
		return $this->motdepasse_admin;
	}

	public function getRememberTokenName()
	{
		return null;
	}
}
