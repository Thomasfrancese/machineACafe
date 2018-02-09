@extends('template.template')
@section('titre')
    Supprime {{$ingredients->nomIngredient}}
@endsection
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Voulez vous supprimer?</h2>
            </div>
            <div class="panel-body">
                <form action="{{route("modifIngredient",[$ingredients->id])}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}

                    <button type="submit" class="btn btn-primary">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection