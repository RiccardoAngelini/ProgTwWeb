@extends('layouts.public')
@section('content')
<div class="offerte">SCOPRI LE OFFERTE</div>
    <section id="sec" class="foto">
       <div class="carousel" data-carousel>
           <button class="carousel-button prev" data-carousel-button="prev">&#10094;</button>
         <button class="carousel-button next" data-carousel-button="next">&#10095;</button>
         <ul data-slides>
           <li class="slide" data-active>
             <img src="images/1.jpeg" alt="#1">
           </li>
           <li class="slide">
             <img src="images/2.jpeg" alt="Nature Image #2">
           </li>
         </ul>
       </div>
   </section>
   <h2 class="testo">Le nostre migliori aziende</h2>
   <div class="main">
    <div class="content-catalogo">
        <div class="coupon">
    <div class="coupon1">AZIENDA1</div>
    <div class="coupon1">AZIENDA2</div>
    <div class="coupon1">AZIENDA3</div>
    <div class="coupon1">AZIENDA4</div>
    <div class="clear"></div>
    </div>
    <div class="veditutte"><a href="aziende.html">Vedi tutte</a></div>
    </div>
</div>
@endsection