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

Route::view('/', 'home');

//routes d'authentication

Auth::routes(['verify' => true]);

//route pour l'affichage de l'accueil utilisateur
Route::get('/', 'HomeController@index')->name('home');

//route pour l'affichage et sélection des places
Route::get('/places', 'PlaceController@index')->name('places');

//routes pour faire,créer et aficher les réservations

Route::view('/dashboard', 'dashboard/dashboard')->name('dashboard');
    //{id} oblige l'utilisateur de choisir une place pour pouvoir effectuer une réservation
Route::get('/dashboard/reservation/create/{id}', 'ReservationController@create');
Route::resource('dashboard/reservations', 'ReservationController')->except('create');


//route pour les utilisateurs

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');

//route pour accèder à la page contact

Route::get('/contact', function () {
    return view('contact');
});

//routes pour créer et envoyer une message de contact

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');


