@extends('layouts.app')

@section('content')

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
                    <div class="card-header justify-content-center"><h4>Liste d'attente</h4></div>
                    <div class="card-content">
                        <table class="table is-hoverable">
                            <br>
                            <thead>
                            <tr>
                                <th>Rang</th>
                                <th>User #</th>
                                <th>Création</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--boucle foreach pour afficher tous les utilisateurs inscrits-->

                            @foreach($listeAttente as $attente)
                                <tr>
                                    <td>{{ $attente->rang }}</td>
                                    <td><strong>{{ $attente->users_id }}</strong></td>
                                    <td>{{ $attente->created_at }}</td>

                                    <!-- méthode route génère une url et est accompagnée d'un paramètre -->

                                    <td><a class="button is-primary" href="{{ route('reservations.create', $attente->users_id) }}">Attribuer une Place</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
