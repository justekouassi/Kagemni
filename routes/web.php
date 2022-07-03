<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::post('/', function () {
//     return view('accueil');
// });
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/classes', function () {
    return view('classes');
});
Route::get('/enseignants', function () {
    return view('enseignants');
});
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