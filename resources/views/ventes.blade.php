@extends('template.template')

@section('image')
    <a href="ventes"><img class="imageCompte" alt="image de comptes" src="../img/faire-ses-comptes.jpg"/></a>
@endsection

@section('titre')
    Liste des Ventes
@endsection



@section('content')
    <div class="container">
        <table class="table table-hover table-bordered">
            <tr>
                <td><b>Id</b></td>
                <td><b>Nom de la boisson</b></td>
                <td><b>Nombre de sucre</b></td>
                <td><b>Prix</b></td>
                <td><b>Date / Heure</b></td>
                @foreach ($ventes as $venteTab)
                    <td>{{ $venteTab->id}}</td>
                    <td>{{$venteTab->nomBoisson}}</td>
                    <td>{{$venteTab->sucre}}</td>
                    <td>{{$venteTab->prix}}</td>
                    <td>{{$venteTab->date}}</td>
                @endforeach

            </tr>
            {{--@foreach ($RetourTab as $typeVente => $donneeVente)--}}
            {{--<tr>--}}
            {{--@foreach ($donneeVente as $valeur)--}}
            {{--<td>{{ $valeur }}</td>--}}
            {{--@endforeach--}}
            {{--</tr>--}}
            {{--@endforeach--}}
        </table>
        <div class="boutons">
            <button type="button" class="btn btn-default">Gérer les ventes</button>
        </div>
    </div>
@endsection
