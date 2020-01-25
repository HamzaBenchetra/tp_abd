<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('clients', 'ClientController');

Route::resource('categories', 'CategorieController');

Route::resource('agences', 'AgenceController');

Route::resource('contrats', 'ContratController');

Route::resource('etatContrats', 'Etat-ContratController');

Route::resource('models', 'ModelController');

Route::resource('modeLocations', 'ModeLocationController');

Route::resource('pays', 'PaysController');

Route::resource('tarifs', 'TarifsController');

Route::resource('types', 'TypeController');

Route::resource('vehicules', 'VehiculeController');

Route::resource('villes', 'VilleController');

Route::resource('users', 'UsersController');

Route::resource('etatContrats', 'Etat-ContratController');

Route::resource('modeLocations', 'ModeLocationController');

Route::resource('etatContrats', 'Etat-ContratController');

Route::resource('modeLocations', 'ModeLocationController');