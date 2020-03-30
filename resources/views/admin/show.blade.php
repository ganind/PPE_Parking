@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header"><h5><strong>Réservation : {{ $reservation->id }}</strong></h5></header>
                <div class="card-content">
                    <div class="content">
                        <p>Place concernée : {{ $reservation->place()->get(['num_place']) }}</p>
                        <hr>
                        <p>Début : {{ $reservation->date_debut }}</p>
                        <hr>
                        <p>Fin : {{ $reservation->date_fin }}</p>
                        <hr>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <a class="btn btn-primary" href="{{ route('reservations.edit', $reservation->id) }}">Modifier</a>
                            <a class="btn btn-primary" href="{{ url('/reservations') }}">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
