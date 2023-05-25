@extends('layouts.admin')
@section('content')
<div class="maina">
@foreach($promo as $pr)
<h1>Statistiche per la promozione{{ $pr->name }}</h1>
@endforeach
<div class="abot-dev-utenti">
<h2>Numero di coupon emessi: {{ $couponStats->total }}</h2></div>
</div>
@endsection