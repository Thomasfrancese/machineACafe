@extends('template.template')

@section('titre')
  Séléction des boissons
@endsection

@section('content')
<div class = "container">
  <div class="tableauBoisson">
    <table class = "table table-hover">
      <thead>
        <tr>
          @foreach ($boissons as $drinkName)
          <td><a href="/boisson/{{$drinkName->codeBoisson}}">{{$drinkName->nomBoisson}}</a></td>
          @endforeach
        </tr>
      </thead>
    </table>
  </div>

{{-- @include('template.formulaireAdd') --}}

{{-- <div class="choixBoisson">
  <h1>Faites votre choix !</h1>
  <form method="post">
    <select name="choixBoisson">
      <option>Choissisez votre boisson</option>
      <option>Café au lait</option>
      <option>Thé</option>
      <option>Expresso</option>
      <option>Café long</option>
    </select>
    <select name="choixSucre" placeholder="Combien de sucres ?"/>
      <option>Combien de sucres?</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    <input type="submit" value="Valider"/>
  </form>
</div> --}}

</div>
@endsection
