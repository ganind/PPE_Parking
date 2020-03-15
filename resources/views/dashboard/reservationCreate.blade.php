<!-- resources/views/dashboard/reservationCreate.blade.php -->
@extends('index')
@section('title', 'Créer reservation')
@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2>{{ $listePlaces->num_place }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Book your stay now at the most magnificent resort in the world!</p>
                <form action="{{ route('reservations.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="room">Place</label>
                                <select class="form-control" name="place_id">
                                    @foreach ($listePlaces->places as $option)
                                        <option value="{{$option->id}}">{{ $option->num_place }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="arrival">Début</label>
                                <input type="date" class="form-control" name="date_debut" placeholder="03/21/2020">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="departure">Fin</label>
                                <input type="date" class="form-control" name="date_fin" placeholder="03/23/2020">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Book it</button>
                </form>
            </div>
        </div>
    </div>
@endsection
