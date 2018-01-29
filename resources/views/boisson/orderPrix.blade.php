@extends('template.template')

@section('titre')
  Affichage des Prix par ordre croissant
@endsection

@section('content')

<div class = "container">
  <table class = "table table-hover">
    <thead>
      <tr>
        <td><p>prix Boisson</p></td>
        <td><p>nom Boisson</p></td>
      </tr>
    </thead>
      <tbody>
        <tr>
        @foreach ($boissons as $drinkOne)
          <td>{{$drinkOne->prix}}</td>
          <td>{{$drinkOne->nomBoisson}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
