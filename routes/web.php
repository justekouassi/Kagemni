<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

/* connexion */

Route::get('/', function () {
	return view('index');
})->name('login');
Route::post('/', [ConnexionController::class, 'connexion']);
Route::get('/signup', function () {
	return view('signup');
});

Route::group([
	'middleware' => 'auth',
], function () {

	Route::post('/signup', [ConnexionController::class, 'inscription']);
	Route::get('/nouveau-mdp', function () {
		return view('nouveau-mdp');
	});
	Route::post('/nouveau-mdp', [ConnexionController::class, 'nouveauMdp']);

	/* accueil et déconnexion */

	Route::get('/accueil', function () {
		return view('accueil');
	});
	Route::get('/logout', [ConnexionController::class, 'deconnexion']);

	/* enseignants */

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


	/* etudiants */

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


	/* classes */

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


	/* cours */

	Route::get('/cours', function () {
		return view('cours');
	});
	Route::get('/cours/create', function () {
		return view('cours-create');
	});
	Route::post('/cours/create', [CoursController::class, 'ajouter']);
	Route::get('/cours/{id}/edit', [CoursController::class, 'consulter']);
	Route::post('/cours/{id}/edit', [CoursController::class, 'modifier']);
	Route::get('/cours/{id}/delete', [CoursController::class, 'supprimer']);


	/* projets */

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


	/* themes */

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


	/* encadrements */

	Route::get('/encadrements', function () {
		return view('encadrements');
	});
});

Route::get('/dynamic_dependent', '\App\Http\Controllers\DynamicDependent@index');

Route::post('dynamic_dependent/fetch', '\App\Http\Controllers\DynamicDependent@fetch')->name('dynamicdependent.fetch');
