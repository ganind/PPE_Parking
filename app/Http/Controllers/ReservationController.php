<?php

namespace App\Http\Controllers;

use App\reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
{
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
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //création d'une réservation
        $user = Auth::user();
        Log::error('passage dans le middleware admin'.$request->all()['num_place']);
        //reservation::create($request->all());

        return redirect()->route('user.index')->with('info','La réservation a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
        //retoune les détails d'une réservation
        return view('admin.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        //
        return view('admin.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        //
        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('info','La réservation a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\reservation $reservation
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(reservation $reservation)
    {
        //supprime une réservation
        $reservation->delete();

        return back()->with('info', 'La réservation a bien été supprimée.');
    }
}
