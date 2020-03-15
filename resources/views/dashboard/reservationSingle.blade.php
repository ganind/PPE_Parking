<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Edit Reservation')
@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="card-header">
                <h2>You're all booked for the {{ $listePlaces->num_place }} !</h2>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
<div class="col-sm-6">
    <h3 class="card-title">
        {{ $listePlaces->num_place }}
    </h3>
    <p class="card-text"><strong>Arrival: </strong>{{ $reservation->date_debut }}</p>
    <p class="card-text"><strong>Departure: </strong>{{ $reservation->date_fin }}</p>
</div>
</div>
<div class="text-center mt-3">
    <a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">Edit this reservation</a>
    <a href="/dashboard/reservations/{{ $reservation->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
</div>
</div>
</div>
</div>
</div>
@endsection
