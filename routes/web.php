<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

/* Routes de connexion */

Route::get('/', function () {
	return view('index');
})->name('login');
Route::post('/', [ConnexionController::class, 'connexion']);
Route::get('/signup', function () {
	return view('signup');
});
Route::post('/signup', [ConnexionController::class, 'inscription']);
Route::get('/nouveau-mdp', function () {
	return view('nouveau-mdp');
});
Route::post('/nouveau-mdp', [ConnexionController::class, 'nouveauMdp']);

Route::group([
	'middleware' => 'auth',
], function() {

	Route::get('/accueil', function () {
		return view('accueil');
	});
	Route::get('/logout', [ConnexionController::class, 'deconnexion']);

	/* Routes enseignants */

	Route::get('/enseignants', function () {
		return view('enseignants');
	});
	Route::get('/enseignants/create', function () {
		return view('enseignants-create');
	});
	Route::post('/enseignants/create', [EnseignantController::class, 'ajouter']);
	Route::get('/enseignants/{id}/edit', [EnseignantController::class, 'consulter']);
	Route::post('/enseignants/{id}/edit', [EnseignantController::class, 'modifier']);
	Route::get('/enseignants/{id}/delete', [EnseignantController::class, 'supprimer']);


	/* Routes etudiants */

	Route::get('/etudiants', function () {
		return view('etudiants');
	});
	Route::get('/etudiants/create', function () {
		return view('etudiants-create');
	});
	Route::post('/etudiants/create', [EtudiantController::class, 'ajouter']);
	Route::get('/etudiants/{id}/edit', [EtudiantController::class, 'consulter']);
	Route::post('/etudiants/{id}/edit', [EtudiantController::class, 'modifier']);
	Route::get('/etudiants/{id}/delete', [EtudiantController::class, 'supprimer']);


	/* Routes matieres */

	Route::get('/matieres', function () {
		return view('matieres');
	});
	Route::get('/matieres/create', function () {
		return view('matieres-create');
	});
	Route::post('/matieres/create', [MatiereController::class, 'ajouter']);
	Route::get('/matieres/{id}/edit', [MatiereController::class, 'consulter']);
	Route::post('/matieres/{id}/edit', [MatiereController::class, 'modifier']);
	Route::get('/matieres/{id}/delete', [MatiereController::class, 'supprimer']);


	/* Routes classes */

	Route::get('/classes', function () {
		return view('classes');
	});
	Route::get('/classes/create', function () {
		return view('classes-create');
	});
	Route::post('/classes/create', [ClasseController::class, 'ajouter']);
	Route::get('/classes/{id}/edit', [ClasseController::class, 'consulter']);
	Route::post('/classes/{id}/edit', [ClasseController::class, 'modifier']);
	Route::get('/classes/{id}/delete', [ClasseController::class, 'supprimer']);


	/* Routes projets */

	Route::get('/projets', function () {
		return view('projets');
	});
	Route::get('/projets/create', function () {
		return view('projets-create');
	});
	Route::post('/projets/create', [ProjetController::class, 'ajouter']);
	Route::get('/projets/{id}/edit', [ProjetController::class, 'consulter']);
	Route::post('/projets/{id}/edit', [ProjetController::class, 'modifier']);
	Route::get('/projets/{id}/delete', [ProjetController::class, 'supprimer']);


	/* Routes themes */

	Route::get('/themes', function () {
		return view('themes');
	});
	Route::get('/themes/create', function () {
		return view('themes-create');
	});
	Route::post('/themes/create', [ThemeController::class, 'ajouter']);
	Route::get('/themes/{id}/edit', [ThemeController::class, 'consulter']);
	Route::post('/themes/{id}/edit', [ThemeController::class, 'modifier']);
	Route::get('/themes/{id}/delete', [ThemeController::class, 'supprimer']);


	/* Routes encadrements */

	Route::get('/encadrements', function () {
		return view('encadrements');
	});
});

Route::get('contact-form', [ContactController::class, 'create']);
Route::post('contact-form', [ContactController::class, 'store']);