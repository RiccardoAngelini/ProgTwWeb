@extends('layouts.public')
@section('title', 'Azienda')
@section('content')


<a class="btn2" href="{{route('admin.listaziende')}}" >Indietro</a>

<div class="cont-azienda">
    
<div id="imageContainer" class="cont-img-off">
@include('helpers/companyImg', ['imgFile' => $azienda->image])

</div>
<script>
$(document).ready(function() {
  $('#imageContainer').animate({ opacity: 1 }, 500); // Imposta una durata di 2 secondi (2000 millisecondi)
});


</script>
<div class="dettagli-azienda">
        <div class="nome-off">{{$azienda->name}}
        </div>
        <br>
        <div class="prezzo-off">{{$azienda->location}}</div>
        
        
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


@endsection

