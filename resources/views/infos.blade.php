

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire </title>
</head>
<body>
<form method="POST" action="http://monsite.fr/users" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="pV1vWWdUqFDfYsBjKag43C3NvzbIC0lHtMnv9BpI">    
    <label for="nom">Entrez votre nom : </label>    
    <input name="nom" type="text" id="nom">    
    <input type="submit" value="Envoyer !"> 
</form>
</body>
</html>  
@extends('template')

@section('titre')
    Informations
@endsection

@section('contenu')
    {!! Form::open(['url' => 'users']) !!}
        {!! Form::label('nom', 'Entrez votre nom : ') !!}
        {!! Form::text('nom') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection