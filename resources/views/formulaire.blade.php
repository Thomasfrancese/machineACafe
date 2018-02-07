@extends('template.template')
@section('titre')
    Ajout d'une nouvelle boisson
@endsection
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Formulaire choix boisson</h2>
            </div>
            <div class="panel-body">
                <form action='/boisson/listBoisson' method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="choixBoisson">Nom de la boisson</label>
                        <input name="drinkName" type="text" class="form-control">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="choixPrix">Choix du prix</label>
                        <input name="choicePrice" type="text" class="form-control">
                        </input>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection