<!DOCTYPE html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coupon | Coupon</title>

    <link rel="stylesheet" href="{{ asset('css/coupon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/staff.css')}}">
</head>
<body class="coupon">

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<button class="button-back2"><a class="btn2" href="{{route('catalogo')}}">Torna al catalogo</a></button>
<div class="content1">
<div class="content2">
      <div class="info">
      <div class="field_coupon">

      @foreach($promotion as $promo)
      <b>Descrizione</b>: {{$promo->desc}}
@endforeach
</div>
<br>
<div class="field_coupon">
      <b>Utente</b>: {{ $user->name}} {{$user->surname}}
   
</div>
<div class="field_coupon">
@foreach($promotion as $promo)
      <b>Metodo di fruizione</b>: {{$promo->metodo_di_fruizione}}
@endforeach
</div>
      <div class="field_coupon">
        @foreach($coupon as $coup)
      <b>Codice coupon</b>: {{ $coup->code}}
      @endforeach
</div>

<div class="stampa"><a href="">Stampa</a>
</div>
</div>
</div>
</div>
</body>
</html>
