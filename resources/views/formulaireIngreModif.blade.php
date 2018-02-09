@extends('template.template')
@section('titre')
    Modifie {{$ingredients->nomIngredient}}
@endsection
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Modif</h2>
            </div>
            <div class="panel-body">
                <form action="{{route("modifIngredient",[$ingredients->id])}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="nomIngred">Choix nom ingredients</label>
                        <input name="nomIngred" type="text" class="form-control"
                               placeholder="{{$ingredients->nomIngredient}}">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantité</label>
                        <input name="quantite" type="text" class="form-control" placeholder="{{$ingredients->stock}}">
                        </input>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection