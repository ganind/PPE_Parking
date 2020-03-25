<?php

namespace App\Http\Controllers;

use App\Place;


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

        return view('admin.places')->with('listePlaces',$listePlaces);
    }
}
