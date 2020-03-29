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
                    <div class="card-header">HISTORIQUE - USER</div>
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
