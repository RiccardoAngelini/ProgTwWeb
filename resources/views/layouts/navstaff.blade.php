<!--Navbar-->

<nav class="navbar">

    <div class="left">

        <a href="{{route('Home')}}"><img src="{{ asset('images/logo.png')}}" alt="logo"></a>

    </div>

    <div class="right">

        <ul class="list">

            <li><a href="{{ route('Home') }}">Home</a></li>

            <li><a href="{{ route('staff') }}" title="Va alla Home dello Staff">Profilo</a></li>

             <li><a href="{{ route('product.index')}}">Offerte</a></li>

            {{-- <li><a href="{{ route('aziende')}}">Aziende</a></li>  --}}

</ul>
</nav>