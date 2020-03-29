@extends('layouts.app')
@section('content')

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <header class="card-header">Réservation : {{ $reservation->id }}
            </header>
                <div class="card-content">
                    <div class="content">
                        <div class="field">
                            <p>Place concernée : {{ $reservation->place_id }}</p>

                <p>Début : {{ $reservation->date_debut }}</p>

                <p>Fin : {{ $reservation->date_fin }}</p>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
