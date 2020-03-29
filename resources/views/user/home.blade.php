@extends('layouts.app')

@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
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
                    <div class="card-header">Tableau de Bord - USER</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            Bienvenue,  {{ Auth::user()->name }}. <p> Que souhaitez-vous faire ? </p>
                            <a class="button is-info" href="{{ route('reservations.create') }}">Réserver une Place</a>
                            <br>
                            <a class="button is-info" href="{{ url('/historique') }}">Historique</a>
                            <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
