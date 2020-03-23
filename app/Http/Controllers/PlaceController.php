<?php

namespace App\Http\Controllers;

use App\Place;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retourne la liste de toutes les places

        $listePlaces=Place::all();

        return view('places')->with('listePlaces',$listePlaces);
    }

    /*public function update(){
        //création d'une réservation

        $place->update($place->('disponible',0));

        return redirect()->route('reservations.index')->with('info','La réservation a bien été modifiée.');
    }*/
}
