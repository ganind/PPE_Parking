@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Modification d'un Utilisateur - ADMIN</p>
                    </header>

                     <div class="card-content">
                        <div class="content">
                         <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input class="input" type="text" name="name" value="{{ old('name', $user->name) }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" name="email" value="{{ old('email', $user->email) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                             <a class="btn btn-primary" href="{{ url('/users') }}">Retour</a>
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
