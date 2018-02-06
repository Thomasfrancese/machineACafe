@extends('template.template')
@section('titre')
  Affichage de la boisson
@endsection
@section('content')
  @foreach ($detailBoissons as $boisson)
      <h3>Nom de la boisson: {{$boisson->nomBoisson}}</h3></br>
      <h3>Prix de la boisson: {{$boisson->prix}}cts</h3>
  @endforeach
@endsection
