<?php

namespace App\Http\Controllers;

use App\Place;
use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
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
        //retourne la liste de toutes les réservations

        $listeReservation=reservation::all();

        return view('admin.reservation')->with('listeReservation',$listeReservation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //création d'une réservation

        if ($place = place::where('disponible',1)->get('id')){
        reservation::create([
            'users_id'=>Auth::user()->id,
           //'place_id'=>$place->length(),
            'place_id'=>$place[0]->id,
            'date_debut'=>now(),
            'date_fin'=> now()->modify('+1 month')
        ]);

        // update de la disponibilité sur la table Place

        place::where('id',$place[0]->id)->update(['disponible'=>0]);

            return redirect()->route('home')->with('info','La réservation a bien été créée');
        } else {

            return redirect()->route('home')->with('info','Vous êtes en Liste d Attente');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //retoune les détails d'une réservation

        return view('admin.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('info','La réservation a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Reservation $reservation
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Reservation $reservation)
    {
        //supprime une réservation
        $reservation->delete();

        return back()->with('info', 'La réservation a bien été supprimée.');
    }
}
