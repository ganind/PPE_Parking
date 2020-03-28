@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Modification d'une Réservation - ADMIN</p>
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
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <a class="btn btn-primary" href="{{ url('/reservations') }}">Retour</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
