@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                   Bienvenue, $user !

                            <br><br>

                            <a href="{{ url('/inscrit') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Inscrits</a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Liste Attente</a>
                            <a href="{{ url('/contact') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Inscriptions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
