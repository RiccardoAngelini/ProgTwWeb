@extends('layouts.public')
@section('title', 'Catalogo')
@section('content')

<div class="searchbar">
<form class="form-aziende1" action="{{route('catalogo2')}}" method="GET"> 
    <label class="search-cont"><input type="search" placeholder="Cerca Descrizione" class="search" name="ricerca_desc" >
</label>
<label class="search-cont"><input type="search" placeholder="Cerca Azienda" class="search" name="ricerca_azienda" >
</label>
<div class="cont-lente"><button class="lente" type="submit">&#128269;</button></div>
</div>

</form>
            
            
        </div>
            <div class="content-catalogo">
            @isset($promotions)
           
                
<div class="coupon">
                    
                @foreach($promotions as $promotion)
    <div class="coupon1">
        <div class="nome-prom">
            {{$promotion->price}} &#8364;<br>
            Sconto del {{$promotion->discountPerc}} &#37;
        </div>

        <div class="cont-img">
            <div class="cont-img-catalogo" id="cont-img-catalogo-{{$promotion->promo_Id}}">
                @include('helpers/promotionImg', ['imgFile' => $promotion->image])
            </div>
        </div>
                <div class="cont-data">
                    <div class="data">
                        Scade il {{ DateTime::createFromFormat('d/m/Y', $promotion->date_end)->format('d/m/Y') }}
                    </div>
                        @include('helpers/remainingDays',['expirationDate' => $promotion->date_end])
                        <div class="nome">
                            {{$promotion->name }}
                        </div>
                        <hr>
                        <div class="nome">
                            {{$promotion->desc }}
                        </div>
                        
                        </div>
                        <div calss="scopri-off">
                            <a href="{{route('offerta',[$promotion->promo_Id])}}"><button class="scopri" >
                                Scopri l'offerta
                            </button></a></div>
                            
                </div>
           
                @endforeach 
    </div>

</div>

@endisset

@isset($promo_by_comp)

<div class="coupon">

@foreach($promo_by_comp as $promo)

<div class="coupon1">
            <div class="nome-prom">
                {{$promo->price}} &#8364;<br>
                Sconto del {{$promo->discountPerc}} &#37;
</div>
<div class="cont-img">
@include('helpers/promotionImg', ['imgFile' => $promo->image])
</div>
<div class="cont-data">
                    <div class="data">
                   Scade il {{ DateTime::createFromFormat('d/m/Y', $promo->date_end)->format('d/m/Y') }}
                    </div>
                    @include('helpers/remainingDays',['expirationDate' => $promo->date_end])
                    <div class="nome">
                    {{$promo->name}}
                    </div>
                    <div class="nome">
                        {{$promo->desc}}
                        </div>
                    </div>
                    <div calss="scopri-off">
                    <a href="{{route('offerta',[$promo->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a></div>
                </div>
                
        @endforeach
                </div>
</div>


@endisset

</div>
@isset($promotions)
@include('pagination.paginator',['paginator'=>$promotions])
@endisset

            <div class="clear"></div>
            </div>
        </div> 

@endsection