
@extends('layouts.app')
@section('title', 'Places')
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
                    <div class="card-header justify-content-center"><h4>Liste de Places</h4></div>
                    <div class="card-header-title justify-content-end"><a href="{{ route('places.create') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Créer une Place</a></div>
                    <div class="card-content">
                        <div class="content">
                            <table class="table is-hoverable">
                                <thead>
                                <tr>
                                    <th><h5>Place</h5></th>
                                    <th><h5>Disponibilité</h5></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--boucle foreach pour afficher toutes les places existantes-->
                                @foreach($listePlaces as $place)
                                    <tr>
                                        <td>{{ $place->num_place }}</td>
                                        <td><strong>{{ $place->disponible }}</strong></td>
                                        <td>
                                            @if($place->disponible == 1 )
                                            <form action="{{ route('places.destroy' , $place->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button is-danger" type="submit">Supprimer</button>
                                        </form>
                                        </td>
                                        @endif

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

