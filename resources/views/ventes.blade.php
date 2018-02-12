@extends('template.template')

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
            @foreach ($ventes as $vente)
                <tr>
                    <td>{{$vente->id}}</td>
                    <td>{{$vente->boisson->nomBoisson}}</td>
                    <td>{{$vente->sucre}}</td>
                    {{--<td>@if($vente->boissons()) {{$vente->boisson->prix}} @endif</td>--}}
                    <td>{{$vente->boisson->prix}}</td>
                    <td>{{$vente->created_at}}</td>
                </tr>
            @endforeach
        </table>
        <div class="boutons">
            <button type="button" class="btn btn-default">Gérer les ventes</button>
        </div>
    </div>
@endsection
