<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ThemeController;

use Illuminate\Support\Facades\Route;

/* connexion */

Route::get('/login', function () {
	return view('login');
})->name('login');
Route::post('/login', [ConnexionController::class, 'connexion']);

/* accueil */

Route::get('/', [AccueilController::class, 'index']);

Route::group([
	'middleware' => 'auth',
], function () {

	/* inscription */

	Route::get('/signup', function () {
		return view('signup');
	});
	Route::post('/signup', [ConnexionController::class, 'inscription']);

	/* changement mot de passe */

	Route::get('/nouveau-mdp', function () {
		return view('nouveau-mdp');
	});
	Route::post('/nouveau-mdp', [ConnexionController::class, 'nouveauMdp']);

	/* déconnexion */

	Route::get('/logout', [ConnexionController::class, 'deconnexion']);


	/* operations enseignants */

	Route::get('/enseignants/create', function () {
		return view('enseignants.enseignants-create');
	});
	Route::post('/enseignants/create', [EnseignantController::class, 'ajouter']);
	Route::get('/enseignants/{id}/edit', [EnseignantController::class, 'consulter']);
	Route::post('/enseignants/{id}/edit', [EnseignantController::class, 'modifier']);
	Route::get('/enseignants/{id}/delete', [EnseignantController::class, 'supprimer']);


	/* operations etudiants */

	Route::get('/etudiants/create', function () {
		return view('etudiants.etudiants-create');
	});
	Route::post('/etudiants/create', [EtudiantController::class, 'ajouter']);
	Route::get('/etudiants/{id}/edit', [EtudiantController::class, 'consulter']);
	Route::post('/etudiants/{id}/edit', [EtudiantController::class, 'modifier']);
	Route::get('/etudiants/{id}/delete', [EtudiantController::class, 'supprimer']);


	/* operations classes */

	Route::get('/classes/create', [ClasseController::class, 'index']);
	Route::post('classes/create/fetch', [ClasseController::class, 'fetch'])->name('classes-create.fetch');

	Route::post('/classes/create', [ClasseController::class, 'ajouter']);
	Route::get('/classes/{id}/edit', [ClasseController::class, 'consulter']);
	Route::post('/classes/{id}/edit', [ClasseController::class, 'modifier']);
	Route::get('/classes/{id}/delete', [ClasseController::class, 'supprimer']);


	/* operations cours */

	Route::get('/cours/create', function () {
		return view('cours.cours-create');
	});
	Route::post('/cours/create', [CoursController::class, 'ajouter']);
	Route::get('/cours/{id}/edit', [CoursController::class, 'consulter']);
	Route::post('/cours/{id}/edit', [CoursController::class, 'modifier']);
	Route::get('/cours/{id}/delete', [CoursController::class, 'supprimer']);


	/* operations projets */

	Route::get('/projets/create', function () {
		return view('projets.projets-create');
	});
	Route::post('/projets/create', [ProjetController::class, 'ajouter']);
	Route::get('/projets/{id}/edit', [ProjetController::class, 'consulter']);
	Route::post('/projets/{id}/edit', [ProjetController::class, 'modifier']);
	Route::get('/projets/{id}/delete', [ProjetController::class, 'supprimer']);


	/* operations themes */

	Route::get('/themes/create', function () {
		return view('themes.themes-create');
	});
	Route::post('/themes/create', [ThemeController::class, 'ajouter']);
	Route::get('/themes/{id}/edit', [ThemeController::class, 'consulter']);
	Route::post('/themes/{id}/edit', [ThemeController::class, 'modifier']);
	Route::get('/themes/{id}/delete', [ThemeController::class, 'supprimer']);
});


/* vues visiteurs */

Route::get('/enseignants', function () {
	return view('enseignants.enseignants');
});
Route::get('/etudiants', function () {
	return view('etudiants.etudiants');
});
Route::get('/classes', function () {
	return view('classes.classes');
});
Route::get('/cours', function () {
	return view('cours.cours');
});
Route::get('/projets', function () {
	return view('projets.projets');
});
Route::get('/themes', function () {
	return view('themes.themes');
});
Route::get('/encadrements', function () {
	return view('encadrements.encadrements');
});
