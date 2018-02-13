@extends('template.template')
@section('titre')
    La liste des recettes
@endsection
@section('content')
    <div class="container">
        <table class="table table-hover text-center">
            <tr>
                <th><b>NomBoisson</b></th>
                <th><b>Ingrédients</b></th>
                <th><b>Dose</b></th>
            </tr>
            @foreach($recettes as $recetteTab)
                @foreach($recetteTab->ingredient as $ingredient)
                    <tr>
                        <td>{{ $recetteTab->nomBoisson }}</td>
                        <td>{{ $ingredient->nomIngredient }}</td>
                        <td>{{ $ingredient->pivot->quantite }}</td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
@endsection





