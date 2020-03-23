@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Réservation : {{ $reservation->id }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Place concernée : {{ $reservation->place_id }}</p>
                <hr>
                <p>Début : {{ $reservation->date_debut }}</p>
                <hr>
                <p>Fin : {{ $reservation->date_fin }}</p>
                <hr>
            </div>
        </div>
    </div>
@endsection
