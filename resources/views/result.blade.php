@extends('template.template')
@section('titre')
    Resultat
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
        <div class="panel-body">
            <h3>Choix de l'utilisateur</h3>
            <p>valeur : <b>{{ $choice['drinkName'] }}</b></p>

        </div>
    </div>

@endsection