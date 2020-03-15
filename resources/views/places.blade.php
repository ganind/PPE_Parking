<!-- resources/views/places.blade.php -->
@extends('index')
@section('title', 'Places')
@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Loop through hotels returned from controller -->
            @foreach ($listePlaces as $place)
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $place->num_place }}</h5>
                            <small class="text-muted">{{ $place->disponible }}</small>
                            <a href="/dashboard/reservations/create/{{ $place->id }}" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
