@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>
            Oups. Nous n’avons pas pu enregistrer votre
            demande pour la raison suivante :
        </strong>

        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>

@endif

