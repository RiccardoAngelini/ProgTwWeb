@extends('layouts.public')
@section('title', 'Catalogo')
@section('content')

<div class="searchbar">
<form class="form-aziende1" action="{{route('catalogo3')}}" method="GET"> <label class="search-cont"><input type="search" placeholder="Cerca" class="search" name="ricerca" required></label>
<div class="search-container">
    <h4>Aziende</h4>
<label class="menu-sel"><select id="menu" name="opzioni">
    <option></option>
@foreach($company_namesids as $company_nameid)
<option>

{{$company_nameid->name}}

</option>
@endforeach
</select></label>
<div class="cont-lente"><button class="lente" type="submit">&#128269;</button></div>
</div>
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
                        <div class="nome">
                            {{$promotion->desc_short }}
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
@include('helpers/promotionImg', ['imgFile' => $prom_by_name->image])
</div>
<div class="cont-data">
                    <div class="data">
                   Scade il {{ DateTime::createFromFormat('d/m/Y', $prom_by_name->date_end)->format('d/m/Y') }}
                    </div>
                    @include('helpers/remainingDays',['expirationDate' => $prom_by_name->date_end])
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
@include('helpers/promotionImg', ['imgFile' => $prom_by_comp->image])
</div>
<div class="cont-data">
                    <div class="data">
                   Scade il {{ DateTime::createFromFormat('d/m/Y', $prom_by_comp->date_start)->format('d/m/Y') }}
                    </div>
                    @include('helpers/remainingDays',['expirationDate' => $prom_by_comp->date_end])
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

@isset($names)
        <div class="coupon">
        @foreach($names as $name)

        <div class="coupon1">
            <div class="nome-prom">
                {{$name->price}} &#8364;<br>
                Sconto del {{$name->discountPerc}} &#37;
</div>
<div class="cont-img">
@include('helpers/promotionImg', ['imgFile' => $name->image])
</div>
<div class="cont-data">
                    <div class="data">
                   Scade il {{ DateTime::createFromFormat('d/m/Y', $name->date_start)->format('d/m/Y') }}
                
                    </div>
                    @include('helpers/remainingDays',['expirationDate' => $name->date_end])
                    <div class="nome">
                    {{$name->name }}
                    </div>
                    <div calss="scopri-off">
                    <a href="{{route('offerta',[$name->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a></div>
                </div>
                
                </div>
@endforeach
</div>
            <div class="clear"></div>
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