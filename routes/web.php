<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\BaseController;
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

Route::get('/enseignants', function () {
    return view('enseignants');
});
Route::get('/enseignants/create', function () {
    return view('enseignants-create');
});
Route::post('/enseignants/create', [BaseController::class, 'ajouter']);

Route::get('/etudiants', function () {
    return view('etudiants');
});
Route::get('/matieres', function () {
    return view('matieres');
});
Route::get('/publications', function () {
    return view('publications');
});
Route::get('/themes', function () {
    return view('themes');
});
Route::get('/pages-login', function () {
    return view('pages-login');
});
