<!--Navbar-->

<nav class="navbar">

        <div class="left">

            <a href="{{route('Home')}}"><img src="{{ asset('images/logo.png')}}" alt="logo"></a>

        </div>

        <div class="right">

            <ul class="list">

                <li><a href="{{ route('Home') }}">Home</a></li>

                <li><a href="{{ route('catalogo')}}">Catalogo</a></li>

                <li><a href="{{ route('aziende')}}">Aziende</a></li>

                <li><a id="login" href="{{ route('login')}}">Login</a></li>

                <li><a href="{{ route('registrati') }}" id="registrati">Registrati</a></li>

                <li><a href="{{ route('admin') }}" id="admin">Admin</a></li>
            </ul>

        </div>

    </nav>
