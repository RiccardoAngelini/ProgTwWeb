<!DOCTYPE html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coupon | Coupon</title>

    <link rel="stylesheet" href="{{ asset('css/coupon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>


<div class="content1">
<div class="content2">
<div class="text">
@foreach($promo_byid as $promo)
Coupon per {{$promo->name}}
@endforeach
      </div>
      <div class="info">
      <div class="field_coupon">
      <b>Identificaote coupon</b>: {{ $coupon->code}}
</div>
<div class="field_coupon">
<b>Data di emissione</b>: {{ date('d/m/Y', strtotime($coupon->date_emiss)) }}
</div>
<div class="field_coupon">
<b>Data di scadenza</b>: {{ date('d/m/Y', strtotime($coupon->date_exp)) }}
</div>
<div class="field_coupon">
    <p>Il buono è usufruibile sia in negozio che online </p>
</div>

</div>
<div class="stampa"><a href="">Stampa</a>
</div>
</div>
</div>
