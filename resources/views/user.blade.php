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
    <li><a href="{{ route('viewprofillo') }}">Visualizza Profillo</a></li>
    <li><a href="{{ route('newpassword') }}">Cambia Password</a></li>
    <li><a href="{{ route('newusername') }}">Modifica nome utente</a></li>
    <li><a href="{{ route('newemail') }}">Modifica email</a></li>
    <li><a href="{{ route('newnamesurname') }}">Modifica Dati Personali</a></li>
</ul>
</div>
</div>


@endsection