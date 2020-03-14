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
                    <div class="card-header">Tableau de Bord</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Bienvenue, <p> {{$user ?? ''}} </p>
                            <br>
                            <a href="{{ url('/reservation') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Réservations</a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Liste d'Attente</a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Inscriptions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
