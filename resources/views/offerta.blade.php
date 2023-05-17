@extends('layouts.public')
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
        <div class="sconto-off">Sonto del {{$sel_promId->discountPerc}} &#37 </div>
        <div class="ottieni-coup">
        <a href="{{route('coupon')}}"><button class="button-ottieni" >
                        Acquista Cupon
                </button></a></div>
         <div style=" clear:right"></div>
    </div>
   
    </div>


@endsection