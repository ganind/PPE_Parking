@extends('index')
@section('title', 'Reservations')
@section('content')
    <div class="container mt-5">
        <h2>Mes Reservations</h2>
        <table class="table mt-3">
            <thead>
            <tr>
                <th scope="col">Nb Place</th>
                <th scope="col">Début</th>
                <th scope="col">Fin</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->place['num_place'] }}</td>
                    <td>{{ $reservation->date_debut }}</td>
                    <td>{{ $reservation->date_fin }}</td>
                    <td><a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if(!empty(Session::get('success')))
            <div class="alert alert-success"> {{ Session::get('success') }}</div>
        @endif
        @if(!empty(Session::get('error')))
            <div class="alert alert-danger"> {{ Session::get('error') }}</div>
        @endif
    </div>
@endsection
