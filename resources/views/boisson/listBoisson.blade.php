@extends('template.template')

@section('titre')
    Affichage des boissons
@endsection

@section('content')

    <div class="container">
        <table class="table table-hover table-bordered text-center">
            <tr>
                <th><p><a href="{{url('/boisson/orderName')}}">Nom boisson</a></p></th>
                <th><p><a href="{{url('/boisson/orderPrice')}}">Prix</a></p></th>
            </tr>

            @foreach ($boissons as $drinkOne)
                <tr>
                    <td>{{$drinkOne->nomBoisson}}</td>
                    <td>{{$drinkOne->prix}} cts</td>
                    <td><a href="{{url('/formulaireModif/'.$drinkOne->id )}}">
                            <button type="button" class="btn btn-success">Modifier</button>
                        </a>
                        <a href="{{url('/formulaireSupp/'.$drinkOne->id)}}">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a></td>
                </tr>
            @endforeach
        </table>
        <td><a href="{{url('/formulaire')}}">
                <button type="button" class="btn btn-primary">Ajouter</button>
            </a></td>
    </div>
@endsection
