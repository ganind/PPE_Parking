@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Utilisateur : {{ $user->id }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Nom : {{ $user->name }}</p>
                <hr>
                <p>Email : {{ $user->email }}</p>
                <hr>
                <p>Créé le:  {{ $user->created_at }}</p>
                <hr>
            </div>
        </div>
    </div>
@endsection
