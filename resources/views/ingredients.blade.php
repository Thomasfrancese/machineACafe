@extends('template.template')
@section('titre')
    La liste des ingredients
@endsection

@section('content')

    <div class="container">
        <div class="tableauIngredients ">
            <table class="table table-hover">
                <tr>
                    <td><b>Nom Ingrédients</b></td>
                    <td><b>Quantité</b></td>
                </tr>
                @foreach ($ingredients as $nomIngre=>$quantite)
                    <tr>
                        <td> {{$nomIngre->nomIngredient}}</td>
                        <td> {{$quantite->stock}}</td>
                        <td><a href="{{url('/formulaireIngre/')}}">
                                <button type="button" class="btn btn-success">Modifier</button>
                            </a>
                            {{--<a href="{{route("suppBoisson")}}">--}}
                                {{--<button type="button" class="btn btn-danger">Supprimer</button>--}}
                            {{--</a></td>--}}
                    </tr>
                @endforeach
            </table>
            <td><a href="{{url('/formulaireIngre')}}">
                    <button type="button" class="btn btn-primary">Ajouter</button>
                </a></td>
        </div>
    </div>

@endsection
