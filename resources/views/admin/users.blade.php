@extends('layouts.app')
@section('title', 'Utilisateurs')

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
                    <div class="card-header justify-content-center"><h3>Liste d'Utilisateurs</h3></div>
                    <div class="card-content">
                        <div class="content">
                            <a href="{{ route('users.create') }}" class="btn btn-secondary btn-lg" role="button" aria-pressed="true">Créer</a>
                            <br>
                            <table class="table is-hoverable">
                                <br>
                                <thead>
                                <tr>
                                    <th><h5>Id</h5></th>
                                    <th><h5>Nom</h5></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--boucle foreach pour afficher tous les utilisateurs inscrits-->

                                @foreach($listeUsers as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td><strong>{{ $user->name }}</strong></td>

                                        <!-- méthode route génère une url et est accompagnée d'un paramètre -->

                                        <td><a class="button is-primary" href="{{ route('users.show', $user->id) }}">Voir</a></td>
                                        <td><a class="button is-warning" href="{{ route('users.edit', $user->id) }}">Modifier</a></td>
                                        <td>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
        <footer class="card-footer">
            {{ $listeUsers->links() }}
        </footer>
    </div>
@endsection
