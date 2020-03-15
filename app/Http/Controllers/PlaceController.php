<?php

namespace App\Http\Controllers;

use App\Place;
use App\Reservation;
use Illuminate\Http\Request;

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
        $listePlaces = Place::all();
        return view('places')->with('listePlace', $listePlaces);
    }
}
