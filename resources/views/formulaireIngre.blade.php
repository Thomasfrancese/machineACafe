@extends('template.template')
@section('titre')
    Ajout dun nouvelle ingredient
@endsection
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Formulaire ingredient</h2>
            </div>
            <div class="panel-body">
                <form action='/ingredients' method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nomIngred">Nom de l'ingredient</label>
                        <input name="nomIngred" type="text" class="form-control">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantité</label>
                        <input name="quantite" type="text" class="form-control">
                        </input>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection