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
<body>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<button class="button-back2"><a class="btn2" href="{{route('catalogo')}}">Torna al catalogo</a></button>
<div class="content1">
<div class="content2">
<div class="text">

      </div>
      <div class="info">
      <div class="field_coupon">
        @foreach($coupon as $coup)
      <b>Codice coupon</b>: {{ $coup->code}}
      @endforeach
</div>
<div class="field_coupon">

</div>
<div class="field_coupon">

</div>
<div class="field_coupon">
    <p>Il buono è usufruibile sia in negozio che online </p>
</div>

</div>
<div class="stampa"><a href="">Stampa</a>
</div>
</div>
</div>
</body>
</html>
