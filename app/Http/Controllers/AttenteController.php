<?php

namespace App\Http\Controllers;

use App\Attente;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttenteController extends Controller
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
        // retourne la liste d'attente

        return view('admin.attente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //créer une réservation dans la liste d'attente

            Attente::create([
                'users_id'=>Auth::user()->id
                ]);

            return redirect()->route('home')->with('info','Vous êtes en Liste d Attente');
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
     * @param  \App\Attente  $attente
     * @return \Illuminate\Http\Response
     */
    public function show(Attente $attente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attente  $attente
     * @return \Illuminate\Http\Response
     */
    public function edit(Attente $attente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attente  $attente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attente $attente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attente  $attente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attente $attente)
    {
        //
    }
}
