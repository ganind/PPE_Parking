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
        $this->middleware('auth',['only' => ['create','store']]);
        //$this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retourne la liste de toutes les réservations

        $listeReservation=Reservation::where('date_fin','>',now())->paginate(5);

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

        if ($place = Place::where('disponible',1)->get('id')){
        Reservation::create([
            'users_id'=>Auth::user()->id,
            'place_id'=>$place[0]->id,
            'date_debut'=>now(),
            'date_fin'=> now()->modify('+1 month')
        ]);

        // update de la disponibilité sur la table Place

        Place::where('id',$place[0]->id)->update(['disponible'=>0]);

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
     * Display the specified resource.
     * @param \App\User $user
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        //retoune l'historique de réservations par utilisateur

        $user = (Auth::user()->id);

        $listeReservation=Reservation::where('users_id','=',$user)->paginate(5);

        return view('user.historique')->with('listeReservation', $listeReservation);
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
        //finit une réservation en changeant la date de fin
        $reservation->update(['date_fin'=>now()]);

        //rendre la place dispo après suppression de la réserv
        $reservation->place()->update(['disponible'=>1]);

        return back()->with('info', 'La réservation a bien été supprimée.');
    }
}
