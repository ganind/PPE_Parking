@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Votre Tableau de Bord</div>

                    <div class="card-content">
                        <div class="content">
                            <table class="table is-hoverable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--boucle foreach pour afficher toutes les réservations existantes-->
                                @foreach($listeReservation as $listeReservation)
                                    <tr>
                                        <td>{{ $listeReservation->id }}</td>
                                        <td><strong>{{ $listeReservation->users_id }}</strong></td>
                                        <!-- méthode route génère une url et est accompagnée d'un paramètre -->
                                        <td><a class="button is-primary" href="{{ route('reservations.show', $listeReservation->id) }}">Voir</a></td>
                                        <td><a class="button is-warning" href="{{ route('reservations.edit', $listeReservation->id) }}">Modifier</a></td>
                                        <td>
                                            <form action="{{ route('reservations.destroy', $listeReservation->id) }}" method="post">
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
