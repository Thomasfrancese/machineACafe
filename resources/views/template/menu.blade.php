<nav class="topnav">
    <div class="links">

        <a href="{{url('/')}}">Home</a>
        <a href="{{url('/machineACafe')}}">Machine a café</a>

        @if (Route::has('login'))
            @auth
                <a href="{{url('/boisson/listBoisson')}}">Liste boisson</a>
                <a href="{{url('/recettes')}}">Liste des Recettes</a>
                <a href="{{url('/ingredients')}}">Liste des Ingrédients</a>
                <a href="{{url('/ventes')}}">Liste des Ventes</a>
                <a href="{{url('/gestionMonnaie')}}">Gestion Monnaie</a>
                <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a href="{{ route('register') }}">Register</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        @endif
    </div>
</nav>

