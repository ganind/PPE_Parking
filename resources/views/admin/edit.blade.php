@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'une réservation - ADMIN</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Place</label>
                        <div class="control">
                            <input class="input" type="number" name="place" value="{{ old('place_id', $reservation->place_id) }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Début</label>
                        <div class="control">
                            <input type="date" name="date_debut" value="{{ old('date_debut', $reservation->date_debut) }}" max="{{ date('timestamp:int') }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Fin</label>
                        <div class="control">
                            <input type="date" name="date_fin" value="{{ old('date_fin', $reservation->date_fin) }}" min="2000" max="{{ date('timestamp:int') }}">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                        <p class="control">
                            <a class="button is-link">Cancel</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
