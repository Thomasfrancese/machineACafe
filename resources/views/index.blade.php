@extends('template.template')
@section('titre')
    Bienvenue {{ Auth::user()->name }} !</br>
    La pause s'impose !
@endsection
@section('content')

 <a  href="machineACafe"><img class="imageCafe" alt="image tasse a café"  src="../img/imgcafe.jpg" /></a>

@endsection
