@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header">
                        <div class="card-header-title justify-content-center"><h4>Modification Place</h4></div>
                    </header>

                    <div class="card-content">
                        <div class="content">
                            <form action="{{ route('places.update', $place->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="field">
                                    <label class="label">Numéro de la Place</label>
                                    <div class="control">
                                        <input type="number" name="num_place" value="{{ old('num_place', $place->num_place) }}">
                                    </div>
                                </div>
                                <br>
                                <div class="field">
                                    <label class="label">Disponibilité</label>
                                    <br>
                                    <div class="control" value="{{ $place->disponible }}" >
                                        <label class="radio">
                                        <input type="radio" name="disponible" value="{{ $place->disponible = 1}}" > Oui
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="disponible" value="{{ $place->disponible = 0}}"> Non
                                        </label>
                                </div>
                                    <br>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        <a class="btn btn-primary" href="{{ url('/places') }}">Retour</a>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

