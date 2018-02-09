@extends('template.template')
@section('titre')
    Modifie {{$boissons->nomBoisson}}
@endsection
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Modif</h2>
            </div>
            <div class="panel-body">
                <form action="{{route("modifBoisson",[$boissons->id])}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="choixBoisson">Choix nom boison</label>
                        <input name="drinkName" type="text" class="form-control" placeholder="{{$boissons->nomBoisson}}">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="choixPrix">Choix du prix</label>
                        <input name="choicePrice" type="text" class="form-control" placeholder="{{$boissons->prix}}cts">
                        </input>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection