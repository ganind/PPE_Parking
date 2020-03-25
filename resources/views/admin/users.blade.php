@extends('layouts.app')
@section('title', 'UTilisateurs')
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
                    <div class="card-header">Tableau de Bord Admin - Liste d'Utilisateurs</div>
                    <p class="card-header-title">Utilisateurs</p>
                    <div class="card-content">
                        <div class="content">
                            <table class="table is-hoverable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Email Verifié</th>
                                    <th>Enregistré</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--boucle foreach pour afficher tous les utilisateurs inscrits-->
                                @foreach($listeUsers as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td><strong>{{ $user->email }}</strong></td>
                                        <td>{{ $user->email_verified_at }}</td>
                                        <td>{{ $user->created_at }}</td>
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
