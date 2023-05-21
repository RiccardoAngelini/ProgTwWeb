@extends('layouts.public')
@section('title', 'Coupon')
@section('content')
<div class="content1">
<div class="content2">
<div class="text">
Coupon
      </div>
      <div class="field_coupon">
          Identificaote coupon: {{ $scelta_coupon->coupon_Id}}
</div>
<div class="field_coupon">
Data di emissione: {{ date('d/m/Y', strtotime($scelta_coupon->date_emiss)) }}
</div>
<div class="field_coupon">
Data di scadenza: {{ date('d/m/Y', strtotime($scelta_coupon->date_exp)) }}
</div>
<div class="field_coupon">
    <p>il buono è usufruibile sia in negozio che online </p>
</div>
</div>
</div>
@endsection