@extends('layouts.admin')
@section('content')
<div class="maina">
@foreach($user as $us)
<h1>Statistiche per l'utente {{ $us->name }} {{$us->surname}}</h1>
@endforeach
<div class="abot-dev-utenti">
<h2>Numero di coupon emessi: {{ $couponStats->total }}</h2></div>
</div>
@endsection