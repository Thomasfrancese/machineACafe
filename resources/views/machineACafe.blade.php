@extends('template.template')

@section('titre')
    Séléction des boissons
@endsection

@section('content')
    <div class="container">
        <div class="tableauBoisson">
            <table class="table table-hover">
                <thead>
                <tr>
                    @foreach ($boissons as $drinkName)
                        <td><a href="/boisson/{{$drinkName->id}}">{{$drinkName->nomBoisson}}</a></td>
                    @endforeach
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
