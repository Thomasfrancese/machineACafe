@extends('template.template')
@section('titre')
    @if (Route::has('login'))
        @auth
            Bienvenue {{ Auth::user()->name }} !</br>
            Prends donc une pause !
        @else
            La pause s'impose !
        @endauth
    @endif
@endsection
@section('content')

    <a href="machineACafe"><img class="imageCafe" alt="image tasse a café" src="../img/imgcafe.jpg"/></a>

@endsection
