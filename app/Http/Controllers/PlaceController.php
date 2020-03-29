<?php

namespace App\Http\Controllers;

use App\Place;
use Exception;
use Illuminate\Http\Request;


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
     * Show the form for editing the specified resource.
     *
     * @param \App\Place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //retourne la view de modification d'un utilisateur

        return view('admin.editPlace', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Place $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $place->update($request->all());

        return back()->with('info', 'La place a été modifiée.');
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
