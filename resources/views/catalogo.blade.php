@extends('layouts.public')
@section('content')
<div class="searchbar">
<form class="form-aziende1" action="{{route('catalogo3')}}" method="GET"> <label><input type="search" placeholder="Cerca" class="search" name="ricerca"></label>
<div class="lente"><input class="" type="submit" value="&#128269;"></div>
</form>
</div>
<div class="main">
        <div class="leftnav">
      
            <div id="aziende">Aziende</div>

            <form class="form-aziende" action="{{route('catalogo2')}}" method="GET">
                <ul class="lista-aziende">
                
                    @foreach($company_namesids as $company_nameid)
                   
                    <li><label><input class="radio" type="checkbox" name="aziende[]" value="{{$company_nameid->name}}">{{$company_nameid->name}}</label></li>
                    
                    
                    @endforeach
                    
                    
                    
                </ul>
                <div class="reset"><input class="button-reset" type="reset" value="Reset"></div>
                <div class="submit"><input class="button-submit" type="submit" value="Cerca"></div>
                <div class="clear"></div>
              
                
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
                    @include('helpers/promotionImg', ['attrs' => 'imagefrm','imgFile' => $promotion->image])
                </div>
                <div class="cont-data">
                    <div class="data">
                   Scade il {{ date('d/m/Y', strtotime($promotion->date_end)) }}
                    </div>
                    <div class="nome">
                    {{$promotion->name }}
                    </div>
                    <div calss="scopri-off">
                    <a href="{{route('offerta',[$promotion->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a></div>
                </div>
                
                </div>
            @endforeach 
            @endisset

            @isset($proms_by_name)

<div class="coupon">

@foreach($proms_by_name as $prom_by_name)
<div class="coupon1">
            <div class="nome-prom">
                {{$prom_by_name->price}} &#8364;<br>
                Sconto del {{$prom_by_name->discountPerc}} &#37;
</div>
<div class="cont-img">
@include('helpers/promotionImg', ['attrs' => 'imagefrm','imgFile' => $prom_by_name->image])
</div>
<div class="cont-data">
                    <div class="data">
                   Scade il {{ date('d/m/Y', strtotime($prom_by_name->date_end)) }}
                    </div>
                    <div class="nome">
                    {{$prom_by_name->name}}
                    </div>
                    <div calss="scopri-off">
                    <a href="{{route('offerta',[$prom_by_name->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a></div>
                </div>
                
                </div>

@endforeach

@endisset

@isset($proms_by_comp)
        <div class="coupon">
        @foreach($proms_by_comp as $prom_by_comp)

        <div class="coupon1">
            <div class="nome-prom">
                {{$prom_by_comp->price}} &#8364;<br>
                Sconto del {{$prom_by_comp->discountPerc}} &#37;
</div>
<div class="cont-img">
@include('helpers/promotionImg', ['attrs' => 'imagefrm','imgFile' => $prom_by_comp->image])
</div>
<div class="cont-data">
                    <div class="data">
                   Scade il {{ date('d/m/Y', strtotime($prom_by_comp->date_end)) }}
                    </div>
                    <div class="nome">
                    {{$prom_by_comp->name }}
                    </div>
                    <div calss="scopri-off">
                    <a href="{{route('offerta',[$prom_by_comp->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a></div>
                </div>
                
                </div>
@endforeach
@endisset

</div>
            <div class="clear"></div>
            </div>
        </div> 

@endsection