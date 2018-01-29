@extends('template.template')
@section('titre')
  Affichage de la boisson
@endsection
@section('content')
  @foreach ($detailBoissons as $boisson)
      <h3>{{$boisson->nomBoisson}}</h3></br>
      <h3>{{$boisson->prix}}cts</h3>
  @endforeach
@endsection
