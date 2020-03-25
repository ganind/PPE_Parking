@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un Utilisateur - ADMIN</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input class="input" type="text" name="nom" value="{{ old('nom', $user->name) }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" name="email" value="{{ old('email', $user->email) }}">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                        <p class="control">
                            <a class="button is-link">Cancel</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
