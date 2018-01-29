@extends('template.template')
@section('titre')
  Classement par ordre
@endsection

@section('content')

<div class = "container">
  <table class = "table table-hover">
    <thead>
      <tr>
        <td><p>Nom boisson</p></td>
      </tr>
    </thead>
      <tbody>
        @foreach ($boissons as $drinkOne)
          <td>{{$drinkOne->nomBoisson}}</td>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
