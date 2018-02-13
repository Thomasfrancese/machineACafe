@extends('template.template')
@section('titre')
        @auth
    Bienvenue {{ Auth::user()->name }} !</br>
        @endauth
    La pause s'impose !
@endsection
@section('content')

 <a  href="machineACafe"><img class="imageCafe" alt="image tasse a café"  src="../img/imgcafe.jpg" /></a>

@endsection
