@extends('layouts.public')
@section('title', 'Coupon')
@section('content')
<div class="tutto">
<div class="con">
Coupon
<p> identificaote coupon: {{ $scelta_coupon->coupon_Id}}
<p>Data di emissione:{{ date('d/m/Y', strtotime($scelta_coupon->date_emiss)) }}</p>
<p>Data di scadenza:{{ date('d/m/Y', strtotime($scelta_coupon->date_exp)) }}</p>
usufruibile sia in negozio che online 
</div>
</div>
@endsection