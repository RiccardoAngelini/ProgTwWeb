@extends('layouts.user')

@section('title', 'Area User')

@section('content')
<div class="area">
    <h1>Area Utente</h1>
</div>
<div class="benvenuto">
    Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}
</div>
<div class="Cont">
<div class="cont-user">

<div class="seleziona">Seleziona</div>


<ul class="list-user">
    <li><a href="{{ route('newpassword') }}">Cambia Password</a></li>
    <li><a href="{{ route('newusername') }}">Modifica nome utente</a></li>
    <li><a href="">Modifica email</a></li>
    <li><a href="">Modifica Nome</a></li>
    <li><a href="">Modifica Cognome</a></li>
</ul>
</div>
</div>


@endsection