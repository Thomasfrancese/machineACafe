<nav class="topnav">
    <div class="links">
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('/machineACafe')}}">Machine a café</a>
        <a href="{{url('/boisson/listBoisson')}}">Liste boisson</a>
        <a href="{{url('/recettes')}}">Liste des Recettes</a>
        <a href="{{url('/ingredients')}}">Liste des Ingrédients</a>
        <a href="{{url('/ventes')}}">Liste des Ventes</a>
        <a href="{{url('/gestionMonnaie')}}">Gestion Monnaie</a>

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        @endif

    </div>
</nav>

