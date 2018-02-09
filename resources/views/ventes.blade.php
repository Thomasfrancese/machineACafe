@extends('template.template')

@section('image')
    <a href="ventes"><img class="imageCompte" alt="image de comptes" src="../img/faire-ses-comptes.jpg"/></a>
@endsection

@section('titre')
    Liste des Ventes
@endsection



@section('content')
    <div class="container">
        <table class="table table-hover table-bordered text-center">
            <tr>
                <th><b>Numéro de vente</b></th>
                <th><b>Nom de la boisson</b></th>
                <th><b>Nombre de sucre</b></th>
                <th><b>Prix</b></th>
                <th><b>Date / Heure</b></th>
            </tr>
            @foreach ($ventes as $venteTab)
                <tr>
                    <td>{{ $venteTab->id}}</td>
                    <td>{{$venteTab->nameDrink}}</td>
                    <td>{{$venteTab->sucre}}</td>
                    <td>{{$venteTab->prix}}</td>
                    <td>{{$venteTab->date}}</td>
                </tr>
            @endforeach

            {{--@foreach ($RetourTab as $typeVente => $donneeVente)--}}
            {{--<tr>--}}
            {{--@foreach ($donneeVente as $valeur)--}}
            {{--<td>{{ $valeur }}</td>--}}
            {{--@endforeach--}}
            {{--</tr>--}}
            {{--@endforeach--}}
        </table>
        <form action='/ventes' method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="choixBoisson">Nom de la boisson</label>
                <input name="drinkName" type="text" class="form-control">
                </input>
            </div>
            <div class="form-group">
                <label for="choixBoisson">Choix sucre</label>
                <input name="sucre" type="text" class="form-control">
                </input>
            </div>
            <div class="form-group">
                <label for="choixPrix">Choix du prix</label>
                <input name="choicePrice" type="text" class="form-control">
                </input>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="boutons">
            <button type="button" class="btn btn-default">Gérer les ventes</button>
        </div>
    </div>
@endsection
