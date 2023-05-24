@extends('layouts.public')
@section('title', 'Home')
@section('content')
<div class="offerte">SCOPRI LE OFFERTE</div>
    <section id="sec" class="foto">
       <div class="carousel" data-carousel>
           <button class="carousel-button prev" data-carousel-button="prev">&#10094;</button>
         <button class="carousel-button next" data-carousel-button="next">&#10095;</button>
         <ul data-slides>
           <li class="slide" data-active>
             <img src="images/1.jpeg" alt="#1" class="img-slide">
           </li>
           <li class="slide">
             <img src="images/2.jpeg" alt="Nature Image #2" class="img-slide">
           </li>
         </ul>
       </div>
   </section>
   <h2 class="testo">Offerte più recenti</h2>
   <div class="coupon-home">
   @foreach($proms as $prom)     
            <div class="coupon1">
            <div class="nome-prom">
                {{$prom->price}} &#8364;<br>
                Sconto del {{$prom->discountPerc}} &#37;
            </div>
            <div class="cont-img">
                    @include('helpers/promotionImg', ['attrs' => 'imagefrm','imgFile' => $prom->image])
                </div>
                <div class="cont-data">
                    <div class="data">
                    Inizia il {{ DateTime::createFromFormat('d/m/Y', $prom->date_start)->format('d/m/Y') }}
                    </div>
                    @include('helpers/remainingDays',['expirationDate' => $prom->date_end])
                    <div class="nome">
                    {{$prom->name }}
                    </div>
                    <div calss="scopri-off">
                    <a href="{{route('offerta',[$prom->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a></div>
                </div>
                
                </div>
            @endforeach 
        </div>
            <div class="clear"></div>
            </div>
        </div>
   <h2 class="testo">Alcune delle nostre aziende</h2>
   <div class="main-home">
    <div class="content-catalogo">
        <div class="azienda2">
        @foreach ($companies as $company)
                <div class="azienda1">
                <div class="nome-az">
                    {{$company->name}}  
                </div>
                    <div class="cont-img">
                    @include('helpers/companyImg', ['imgFile' => $company->image])
                </div>
                </div>   
                @endforeach

    <div class="clear"></div>
    </div>
    <div class="veditutte"><a href="{{route('aziende')}}">Vedi tutte</a></div>
    </div>
</div>
@endsection