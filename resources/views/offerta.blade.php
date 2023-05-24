@extends('layouts.public')
@section('title', 'Promozione')
@section('content')


<a class="btn2" href="{{route('catalogo')}}" >Back</a>

<div class="cont-off">
<div class="cont-img-off">
@include('helpers/promotionImg', ['imgFile' => $sel_promId->image])
</div>
<script>
    $(document).ready(function() {
                    // seleziono l'elemento in base a la sua classe
                    var container = $('.cont-img-off');
                    var image = container.find('img');
                    image.animate({ opacity: 1, width: '300px'},9000); //applico l'animazione
                });
</script>
<div class="descrizione"> 

    <div><h3><u>Descrizione</u></h3></div><br>
{!!$sel_promId->desc!!}
</div>
    <div class="dettagli">
        <div class="nome-off">{{$sel_promId->name}}
        </div>
        <br>
        <div class="prezzo-off">Scade il {{ DateTime::createFromFormat('d/m/Y', $sel_promId->date_end)->format('d/m/Y') }} </div>
        <div class="prezzo-off">Prezzo: {{$sel_promId->price}}  &#8364;
        </div>
        <div class="sconto-off">Sconto del {{$sel_promId->discountPerc}} &#37 </div>
        @can('isUser')
      @include('helpers/promotionCoupon',['expirationDate' => $sel_promId->date_end])
      @endcan
         <div style=" clear:right"></div>
    </div>
   
    </div>
<script>
   function handleResponsiveLayout() {
        var windowWidth = $(window).width();
        
        if (windowWidth < 768) {
            $('.cont-img-off').css('font-size', '14px');
            $('.descrizione').addClass('mobile-style');
        } else {
            $('.cont-img-off').css('font-size', '16px');
            $('.descrizione').removeClass('mobile-style');
        }
    }
        $(window).on('resize', handleResponsiveLayout);

        $(document).ready(function() {
        handleResponsiveLayout();
    });
</script>

<style>
    .btn2 {
      background-color: #ff7a57;
      border: none;
      color: white;
      padding: 5px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 0.5px 0px;
      cursor: pointer;
      border-radius: 0.3em;
      margin-top: 1em;
      margin-left:50%;
  }
</style>
@endsection

