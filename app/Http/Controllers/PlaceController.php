<?php

namespace App\Http\Controllers;

use App\Place;
use Exception;


class PlaceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
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

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Place $place
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function destroy(Place $place)
    {

        $place->delete();

        return back()->with('info', 'La place a bien été supprimée.');


    }
}
