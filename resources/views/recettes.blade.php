@extends('template.template')
@section('titre')
    La liste des recettes
@endsection
@section('content')
    <div class="container">
        <div class="tableauRecette ">
            <table class="table table-hover">
                <tr>
                    <th><b>NomBoisson</b></th>
                    <th><b>Ingrédients</b></th>
                    <th><b>Quantité</b></th>
                </tr>
                @foreach($recettes as $recetteTab)
                    <td>{{ $recetteTab->nomBoisson }}</td>
                    <td>{{ $recetteTab->ingredient }}</td>
                    <td>{{ $recetteTab->quantite }}</td>
                    <td><a href="{{url('/formulaireIngreModif/'.$nomIngre->id)}}">
                            <button type="button" class="btn btn-success">Modifier</button>
                        </a>
                        <a href="{{route("suppIngredient",[$nomIngre->id])}}">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a></td>
                @endforeach
            </table>
        </div>
@endsection





