@extends('layouts.base')

@section('content')
    <h1 class="green">Bonjour.</h1>

    <!-- Une image présente dans le dossier public : -->
    <img src="/circle.svg">

    <a href="#" id="element">
        Cliquez ici et ouvrez la console.
    </a>

    <script src="/script.js"></script>
@endsection

