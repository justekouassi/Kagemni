<?php

namespace App\Http\Controllers;

class ConnexionController extends Controller
{
  public function connexion()
  {
    request()->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    $result = auth()->attempt([
      'email_admin' => request('email'),
      'motdepasse_admin' => bcrypt(request('password')),
    ]);
    // var_dump($result);
    if (!($result)) {
      return redirect('/accueil');
    }
    return back()->withInput()->withErrors([
      'password' => "Vos identifiants sont incorrects.",
    ]);
  }
}
