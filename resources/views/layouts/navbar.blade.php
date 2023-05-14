<!--Navbar-->

<nav class="navbar">

        <div class="left">

            <a href="{{route('Home')}}"><img src="images/logo.png" alt="logo"></a>

        </div>

        <div class="right">

            <input type="checkbox" id="check">

            <label for="check" class="checkBtn">

                <i id="hamburger" class="fa fa-bars"></i>

            </label>

            <ul class="list">

                <li><input type="search" placeholder="Cerca" class="search"></li>

                <li><a href="{{ route('Home') }}">Home</a></li>

                <li><a href="{{ route('catalogo')}}">Catalogo</a></li>

                <li><a href="{{ route('aziende')}}">Aziende</a></li>

                <li><a id="login" href="{{ route('login')}}">Login</a></li>

                <li><a href="{{ route('registrati') }}" id="registrati">Registrati</a></li>

            </ul>

        </div>

    </nav>
