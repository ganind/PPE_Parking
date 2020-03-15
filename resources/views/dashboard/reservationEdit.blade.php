<!-- resources/views/dashboard/reservationEdit.blade.php -->
@extends('index')
@section('title', 'Edit Reservation')
@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="card-header">
                <h2>{{ $listePlaces->num_place }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Book your place!</p>
                <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="room">Room Type</label>
                                <select class="form-control" name="place_id" value="{{ old('place_id', $reservation->place_id) }}">
                                    @foreach ($listePlaces->places as $option)
                                        <option value="{{$option->id}}">{{ $option->num_place }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="arrival">Début</label>
                                <input type="date" class="form-control" name="date_debut" placeholder="03/21/2020" value="{{ old('date_debut', $reservation->date_debut) }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="departure">Fin</label>
                                <input type="date" class="form-control" name="date_fin" placeholder="03/23/2020" value="{{ old('date_fin', $reservation->date_fin) }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <p class="text-right">
                <button type="submit" class="btn btn-sm text-danger">Delete reservation</button>
            </p>
        </form>
    </div>
@endsection
