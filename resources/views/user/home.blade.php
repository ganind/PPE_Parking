@extends('layouts.app')

@section('css')
    <style>
        .is-info {
            margin: 0.3em;
        }
    </style>
@endsection
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
                    <div class="card-header justify-content-center"> <strong>Mon Espace</strong></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <strong>Bienvenue,  {{ Auth::user()->name }} !</strong>
                            <br><br>
                            Que souhaitez-vous faire ?
                            <br>
                            <br>
                            <a class="button is-info" href="{{ route('reservations.create') }}">Réserver une Place</a>
                            <a class="button is-info" href="{{ url('/historique') }}">Historique</a>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
