@extends('layouts.public')
@section('title', 'Promozione')
@section('content')
<div class="cont-off">
<div class="cont-img-off">
@include('helpers/promotionImg', ['imgFile' => $sel_promId->image])
</div>

<div class="descrizione"> 

    <div><h3><u>Descrizione</u></h3></div><br>
{!!$sel_promId->desc!!}
</div>
    <div class="dettagli">
        <div class="nome-off">{{$sel_promId->name}}
        </div>
        <br>
        <div class="prezzo-off">Scade il {{ date('d/m/Y', strtotime($sel_promId->date_end))}} </div>
        <div class="prezzo-off">Prezzo: {{$sel_promId->price}}  &#8364;
        </div>
        <div class="sconto-off">Sconto del {{$sel_promId->discountPerc}} &#37 </div>
      @include('helpers/promotionCoupon',['expirationDate' => $sel_promId->date_end])
         <div style=" clear:right"></div>
    </div>
   
    </div>


@endsection