@extends('layouts.app')

@section('content')
    <!-- Notification de modification -->
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Votre Tableau de Bord - USER - HISTORIQUE</div>
                    <p class="card-header-title">Réservations</p>
                    <div class="card-content">
                        <div class="content">
                            <table class="table is-hoverable">
                                <thead>
                                <tr>
                                    <th>Place</th>
                                    <th>Début</th>
                                    <th>Fin</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--boucle foreach pour afficher toutes les reservations effectuées par l'user-->
                                @foreach($listeReservation as $reservation)
                                    <tr>
                                        <td>{{ $reservation->place_id }}</td>
                                        <td>{{ $reservation->date_debut }}</td>
                                        <td>{{ $reservation->date_fin }}</td>
                                        <!-- méthode route génère une url et est accompagnée d'un paramètre -->
                                        <td><a class="button is-primary" href="{{ route('place.show', $place->id) }}">Voir</a></td>
                                        <td><a class="button is-warning" href="{{ route('place.edit', $place->id) }}">Modifier</a></td>
                                        <td>
                                            <form action="{{ route('places.destroy', $listePlace->id) }}" method="post">
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
@endsection
