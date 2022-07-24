<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/accueil', function () {
	return view('accueil');
});
Route::get('/', function () {
	return view('index');
});
// Route::post('/', [ConnexionController::class, 'connexion']);
Route::post('/', function () {
	return view('accueil');
});

Route::get('/classes', function () {
	return view('classes');
});

// Routes enseignants
Route::get('/enseignants', function () {
	return view('enseignants');
});
Route::get('/enseignants/create', function () {
	return view('enseignants-create');
});
Route::post('/enseignants/create', [EnseignantController::class, 'ajouter']);

// Routes etudiants
Route::get('/etudiants', function () {
	return view('etudiants');
});
Route::get('/etudiants/create', function () {
	return view('etudiants/create');
});
Route::post('/etudiants/create', [EtudiantController::class, 'ajouter']);

Route::get('/matieres', function () {
	return view('matieres');
});
Route::get('/projets', function () {
	return view('projets');
});
Route::get('/themes', function () {
	return view('themes');
});
Route::get('/pages-login', function () {
	return view('pages-login');
});
