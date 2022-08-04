<?php

namespace App\Http\Controllers;

class ConnexionController extends Controller
{
	public function inscription() {
    request()->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    $administrateur = \App\Models\Administrateur::create([
      "email_admin" => request("email"),
      "motdepasse_admin" => bcrypt(request("password")),
    ]);

    return view("index");
	}

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
    $administrateur = \App\Models\Administrateur::where('id', $id)->first();
    if ($result) {
      return view('accueil', [
				'administrateur' => $administrateur,
			]);
    }
    return back()->withInput()->withErrors([
      'email' => "Vos identifiants sont incorrects.",
    ]);
  }

	public function deconnexion()
  {
    auth()->logout();
    return redirect('/');
  }
}
