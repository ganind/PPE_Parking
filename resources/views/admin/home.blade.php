@extends('layouts.app')

@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tableau de Bord - ADMIN</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Bienvenue, {{ Auth::user()->name }} !
                            <br>
                            <br>
                            <a href="{{ route('reservations.index') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Réservations</a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Liste d'Attente</a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Inscriptions</a>
                            <a href="{{ route('places.index') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Places</a>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Utilisateurs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
