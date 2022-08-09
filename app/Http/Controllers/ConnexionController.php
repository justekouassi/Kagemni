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
	 * @return index la page de connexion
	 */
	public function inscription() {
    request()->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
      'avatar' => ['image'],
    ]);

    $administrateur = Administrateur::create([
      "email_admin" => request("email"),
      "motdepasse_admin" => bcrypt(request("password")),
      "avatar" => request("avatar")->store('avatars', 'public'),
    ]);

    return redirect('/');
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

		$id = request("id");
    $administrateur = Administrateur::where('id', $id)->first();
    if ($result) {
      return view('accueil', [
				'administrateur' => $administrateur,
			]);
    }
    return back()->withInput()->withErrors([
      'email' => "Vos identifiants sont incorrects.",
    ]);
  }

	/**
	 * assure la déconnexion d'un administrateur
	 * @return index la page de connexion
	 */
	public function deconnexion()
  {
    auth()->logout();
    return redirect('/');
  }

	/**
	 * permet de modifier le mot de passe d'un administrateur
	 * @return index la page de connexion
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

    return redirect('/');
	}
}
