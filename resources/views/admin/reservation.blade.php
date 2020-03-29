@extends('layouts.app')

@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
    </style>
@endsection

@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center"><h3>Réservations Actives</h3></div>
                    <div class="card-content">
                        <div class="content">
                            <a href="{{ route('reservations.create') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Créer</a></div>
                            <table class="table is-hoverable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Place</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--boucle foreach pour afficher toutes les réservations existantes-->
                                @foreach($listeReservation as $reservation)
                                    <tr>
                                        <td>{{ $reservation->id }}</td>
                                        <td><strong>{{ $reservation->users_id }}</strong></td>
                                        <td>{{ $reservation->num_place}}</td>
                                        <!-- méthode route génère une url et est accompagnée d'un paramètre -->

                                        <td><a class="button is-primary" href="{{ route('reservations.show', $reservation->id) }}">Voir</a></td>
                                        <td><a class="button is-warning" href="{{ route('reservations.edit', $reservation->id) }}">Modifier</a></td>
                                        <td>
                                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="button is-danger" type="submit">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <footer class="card-footer">
            {{ $listeReservation->links() }}
        </footer>
    </div>
@endsection
