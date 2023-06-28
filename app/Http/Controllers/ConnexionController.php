<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;

/**
 * L'ensemble des fonctions associées à la connexion
 */
class ConnexionController extends Controller
{
	/**
	 * assure l'inscription d'un administrateur
	 * @return login la page de connexion
	 */
	public function inscription()
	{
		request()->validate([
			'email' => ['required', 'email'],
			'password' => ['required'],
			'role' => ['required'],
			'avatar' => ['image'],
		]);

		Administrateur::create([
			"email_admin" => request("email"),
			"motdepasse_admin" => bcrypt(request("password")),
			"role" => request("role"),
			"avatar" => request("avatar")->store('avatars', 'public'),
		]);

		return redirect('/login');
	}

	/**
	 * assure la connexion d'un administrateur
	 * @return accueil la page d'accueil
	 */
	public function connexion()
	{
		request()->validate([
			'email' => ['required', 'email'],
			'password' => ['required'],
		]);

		$result = auth()->attempt([
			'email_admin' => request('email'),
			'password' => request('password'),
		]);

		if ($result) {
			return redirect('/');
		}
		return back()->withInput()->withErrors([
			'email' => "Vos identifiants sont incorrects.",
		]);
	}

	/**
	 * assure la déconnexion d'un administrateur
	 * @return login la page de connexion
	 */
	public function deconnexion()
	{
		auth()->logout();
		return redirect('/login');
	}

	/**
	 * permet de modifier le mot de passe d'un administrateur
	 * @return login la page de connexion
	 */
	public function nouveauMdp()
	{
		request()->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'confirmed'],
			'password_confirmation' => ['required'],
		]);

		$email = request("email");
		$administrateur = Administrateur::where('email_admin', $email)->first();
		$administrateur->update([
			"motdepasse_admin" => bcrypt(request("password")),
		]);

		return redirect('/login');
	}
}
