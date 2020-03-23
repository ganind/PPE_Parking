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
                    <div class="card-header">Votre Tableau de Bord</div>
                        <p class="card-header-title">Réservations</p>
                    <div class="card-content">
                        <div class="content">
                            <table class="table is-hoverable">
                                <thead> <span> Bonjour </span>
                                <tr>
                                    <th>Place</th>
                                    <th>Date</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--boucle foreach pour afficher toutes les places existantes-->
                                @foreach($listePlace as $listePlace)
                                    <tr>
                                        <td>{{ $listePlace->num_place }}</td>
                                        <td><strong>{{ $listePlace->disponible }}</strong></td>
                                        <!-- méthode route génère une url et est accompagnée d'un paramètre -->
                                        <td><a class="button is-primary" href="{{ route('places.show', $listePlace->id) }}">Voir</a></td>
                                        <td><a class="button is-warning" href="{{ route('places.edit', $listePlace->id) }}">Modifier</a></td>
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

