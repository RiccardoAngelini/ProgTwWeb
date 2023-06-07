@extends('layouts.public')
@section('title', 'Promozione')
@section('content')

<div class="button-back">
<a class="btn2" href="{{route('catalogo')}}" >Torna al catalogo</a>
</div>
<div class="cont-off">
<div id="imageContainer" class="cont-img-off">
            @if (file_exists(public_path('images/promotions/' . $sel_promId->image)))
            @include('helpers/promotionImg', ['imgFile' => $sel_promId->image])
            @else
            <img src="{{ asset('images/promotions/default.jpg') }}" class="img">
            @endif

</div>
<script>
$(document).ready(function() {
  $('#imageContainer').animate({ opacity: 1 }, 500); // Imposta una durata di 2 secondi (2000 millisecondi)
});


</script>
<div class="descrizione"> 

    <div><h3><u>Descrizione</u></h3></div><br>
    {{$sel_promId->desc}} <br><br><br><br><br>
    <div><h3><u>Metodo di fruizione: </u></h3></div><br>
    {{$sel_promId->metodo_di_fruizione}}<br><br><br> 

    <div><h3><u>Luogo di fruizione:</u></h3></div><br>
     {{$sel_promId->luogo_di_fruizione}}
</div>

    <div class="dettagli">
        <div class="nome-off">{{$sel_promId->name}}
        </div>
        <br>
        <div class="prezzo-off">Scade il {{ DateTime::createFromFormat('d/m/Y', $sel_promId->date_end)->format('d/m/Y') }} </div>
        
        <div class="prezzo-off"><strong>Prezzo: </strong> {{$sel_promId->price}}  &#8364;</div>

        <div class="sconto-off">Sconto del {{$sel_promId->discountPerc}} &#37 </div>
        @can('isUser')
      @include('helpers/promotionCoupon',['expirationDate' => $sel_promId->date_end,'promo_Id'=>$sel_promId->promo_Id])
      @endcan
         <div style=" clear:right"></div>
    </div>
   
    </div>
@endsection

