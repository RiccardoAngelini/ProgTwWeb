@extends('layouts.public')
@section('title', 'Coupon')
@section('content')
<div class="cont-coupon">
<div class="nome-coupon">
@foreach($promo_byid as $promo)
Coupon per {{$promo->name}}
@endforeach

</div>
<div class="con">


<p> Codice coupon: {{ $coupon->code}}
<p>Data di emissione:{{ date('d/m/Y', strtotime($coupon->date_emiss)) }}</p>
<p>Data di scadenza:{{ date('d/m/Y', strtotime($coupon->date_exp)) }}</p>
usufruibile sia in negozio che online 
</div>
</div>
@endsection