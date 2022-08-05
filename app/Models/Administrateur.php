<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Administrateur extends Model implements Authenticatable {
	use BasicAuthenticatable;

	protected $fillable = [
		'email_admin',
		'motdepasse_admin',
		'avatar',
	];

	public function getAuthPassword() {
		return $this->motdepasse_admin;
	}

	public function getRememberTokenName()
	{
		return null;
	}
}
