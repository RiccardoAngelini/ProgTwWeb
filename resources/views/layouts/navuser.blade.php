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

                @auth
        <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    

</ul>
</nav>