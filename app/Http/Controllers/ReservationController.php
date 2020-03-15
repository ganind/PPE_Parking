<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Place;
use App\Reservation;
use App\User;
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
        $listeReservation=reservation::all()
            ->where('users_id', Auth::user()->getUserInfo()['id'])
            ->orderBy('date_debut', 'asc')
            ->get();

        /*$user = Auth::user();
        if ($user && $user->admin === 1) {
            return view('admin.reservation')->with('listeReservation',$listeReservation);
        }
        //si utilisateur n'est pas admin la view home d'user est affichée
        return view('user.home'); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($place_id)
    {
        //création d'une réservation
        $listePlaces = Place::with('disponibles')->get()->find($place_id);
        return view('dashboard.reservationCreate', compact('listePlaces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->getUserInfo()['id'];
        $request->request->add(['user_id'=>$user_id]);
        Reservation::create($request->all());

        return redirect('dashboard/reservations')->with('success', 'Réservation créée !');

        /*création d'une réservation
        //$user = Auth::user()->id;
        //$place = place::where('num_place',30)->get('id');
        //Log::error('lidentifiant de luser est '.$user);
        //Log::error('passage dans le middleware admin '.$place);
        //$newArray = array('users_id' =>$user, 'place_id'=>$place,'rang_attente'=>0,'date_debut'=>$request->all()['date_debut'], 'date_fin'=>$request->all()['date_fin']);
        //Log::error("la variable tableau est ".var_dump($newArray));
        reservation::create([
            'users_id'=>Auth::user()->id,
            'place_id'=>request('num_place'),
            'rang_attente'=>0,
            'date_debut'=>request('date_debut'),
            'date_fin'=>request('date_fin')
            ]);
        //Log::error('passage dans le middleware admin'.$request->all()['num_place']);
        return redirect()->route('user.index')->with('info','La réservation a bien été créée'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //retourne les détails d'une réservation
        $reservation= Reservation::with('place_id', 'place.place')
            ->get()
            ->find($reservation->id);

        if ($reservation->user_id === Auth::user()->getUserInfo()['id]']) {
        $place_id= $reservation->place->place_id;
        $listePlaces= Place::with('places')->get()->find($place_id);

        return view('dashboard.reservationsSingles', compact('reservation', 'listePlaces'));
        } else
        return redirect('dashboard/reservations')->with('error', 'Vous ne pouvez pas être ici.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $reservation= Reservation::with('place_id', 'place.place')
            ->get()
            ->find($reservation->id);
        if ($reservation->user_id === Auth::user()->getUserInfo()['id]']) {
            $place_id = $reservation->place->place_id;
            $listePlaces = Place::with('places')->get()->find($place_id);
            return view('dasboard.reservationEdit', compact('reservation', 'listePlaces'));
        } else
            return redirect('dashboard/reservations')->with('error', 'Vous ne pouvez pas être ici.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Reservation $reservation)
    {
        if ($reservation->user_id != Auth::user()->getUserInfo(['id']))
            return redirect('dashboard/reservations')->with('error', 'Vous ne pouvez pas être ici.');

        $user_id = Auth::user()->getUserInfo()['id'];
        $reservation->users_id= $user_id;
        $reservation->date_debut = $request->date_debut;
        $reservation->date_fin = $reservation->date_fin;

        $reservation->save();

        return redirect('dashboard/reservations')->with('success','La réservation a bien été modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Reservation $reservation)
    {
        //supprime une réservation
        $reservation = Reservation::find($reservation->id);

        if ($reservation->user_id === Auth::user()->getUserInfo()['id']) {
        $reservation->delete();

        return redirect('dashboard/reservations')->with('success', 'La réservation a bien été supprimée !');
        } else
            return redirect('dashboard/reservations')->with('success','La réservation a bien été modifiée !');
    }
}
