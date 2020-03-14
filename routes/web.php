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

//route d'entrée du site

Route::get('/', function () {
    return view('accueil');
});

//routes d'authentication

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//route pour afficher la liste des inscrits


//route pour accèder à la page contact

Route::get('/contact', function () {
    return view('contact');
});

//routes pour créer et envoyer une message de contact

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

//route pour les utilisateurs

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');


/*Les groupes de routes permettent de déclarer une liste de routes
partageant un préfixe commun (en l’occurrence admin) à l’aide de
la méthode Route::group et de la propriété prefix.
Pour éviter de répéter admin pour chacune des routes d’administration,
il est possible de les organiser de la manière suivante :

Route::group(['prefix’' => 'admin'], function() {

    Route::get('stats', function () {  });
    Route::get('users', function () {  });
    Route::get('users/{id}', function ($id) { });
    Route::get('users/create', function () { });
    Route::get('logs', function () { });

}); */

