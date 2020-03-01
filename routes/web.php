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

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/bonjour/{name?}', function ($name = null) {

    if ($name === null) {
        return 'Bonjour tout le monde';
    } else {
        return "Bonjour, $name !";
    }
});

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


