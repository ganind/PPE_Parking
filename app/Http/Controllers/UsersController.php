<?php

namespace App\Http\Controllers;

use App\reservation;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        //retourne la liste de toutes les réservations
        $listeReservation=reservation::all();
        return view('user.reservation')->with('listeReservation',$listeReservation);
    }

    /**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        //création d'une réservation
        return view('create');
    }
    public function store(Request $request)
    {
        //
    }
}
