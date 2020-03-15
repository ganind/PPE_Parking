@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Réservation d'une Place</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('reservations.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Place</label>
                        <div class="control">
                            <input class="input @error('num_place') is-danger @enderror" type="number" name="num_place" value="{{ old('place') }}" >
                        </div>
                        @error('num_place')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Date de Début</label>
                        <div class="control">
                            <input class="input" type="date" name="date_debut" value="{{ old('date_debut') }}">
                        </div>
                        @error('date_debut')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Date de Fin</label>
                        <div class="control">
                            <input class="input" type="date" name="date_fin" valuer="{{ old('description') }}">
                        </div>
                        @error('date_fin')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
