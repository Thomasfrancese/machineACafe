@extends('template.template')
@section('titre')
    La liste des ingredients
@endsection

@section('content')

    <div class="container">
        <table class="table table-hover table-bordered text-center">
            <tr>
                <td><b>Nom Ingrédients</b></td>
                <td><b>Quantité</b></td>
            </tr>
            @foreach ($ingredients as $nomIngre)
                <tr>
                    <td> {{$nomIngre->nomIngredient}}</td>
                    <td> {{$nomIngre->stock}}</td>
                    <td><a href="{{url('/formulaireIngreModif/'.$nomIngre->id)}}">
                            <button type="button" class="btn btn-success">Modifier</button>
                        </a>
                        <a href="{{url('/formulaireIngreSupp',$nomIngre->id)}}">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a></td>
                </tr>
            @endforeach
        </table>
        <td><a href="{{url('/formulaireIngre')}}">
                <button type="button" class="btn btn-primary">Ajouter</button>
            </a></td>
    </div>

@endsection
