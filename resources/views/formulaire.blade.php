@extends('template.template')
@section('titre')
    formulaire
@endsection
@section('content')
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Formulaire choix boisson</h2>
      </div>
      <div class="panel-body">
          <form action="result" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="choixBoisson">Choix boisson</label>
                  {{--<select name="drinkName" class="form-control">--}}
                      {{--<option value="cafelong">Café long</option>--}}
                      {{--<option value="expresso">Expresso</option>--}}
                      {{--<option value="the">Thé</option>--}}
                      {{--<option value="cafeaulait">Café au lait</option>--}}
                  {{--</select>--}}
                  <input name="drinkName" type="text" class="form-control">
                  </input>
              </div>
              <div class="form-group">
                  <label for="choixsucre">Choix du sucres</label>
                  <select name="choixsucre" class="form-control" disabled>
                      <option value="sucre1">1 sucre</option>
                      <option value="sucre2">2 sucres</option>
                      <option value="sucre3">3 sucres</option>
                      <option value="sucre4">4 sucres</option>
                      <option value="sucre5">5 sucres</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection