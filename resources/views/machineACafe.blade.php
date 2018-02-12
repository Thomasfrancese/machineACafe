@extends('template.template')

@section('titre')
    Séléction des boissons
@endsection

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                @foreach ($boissons as $drinkName)
                    <td><a href="/boisson/{{$drinkName->id}}">{{$drinkName->nomBoisson}}</a></td>
                @endforeach
            </tr>
            </thead>
        </table>
        <form action='/ventes' method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="choixBoisson">Selection boisson</label>
                <select name="drinkName" class="selectpicker">
                    @foreach ($boissons as $drinkName)
                        <option type="text" class="form-control"
                                value='{{$drinkName->id}}'>{{$drinkName->nomBoisson}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="choixBoisson">Choix sucre</label>
                <select name="sucre">
                    <option value="0">Sans sucre</option>
                    <option value="1">1 sucre</option>
                    <option value="2">2 sucre</option>
                    <option value="3">3 sucre</option>
                    <option value="4">4 sucre</option>
                    <option value="5">5 sucre</option>
                </select>
                {{--<input name="sucre" type="text" class="form-control">--}}
                {{--</input>--}}
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
