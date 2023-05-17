@extends('layouts.public')
@section('content')
<div class="searchbar">
<form class="form-aziende">  <input type="search" placeholder="Cerca" class="search"></form>
</div>
<div class="main">
        <div class="leftnav">
      
            <div id="aziende">Aziende</div>
            <form class="form-aziende">
                <ul class="lista-aziende">
                    @foreach($company_namesids as $company_nameid)
                    <li><label><input class="radio" type="radio" name="azienda {{$company_nameid->comp_Id}}" value="{{$company_nameid->name}}">{{$company_nameid->name}}</label></li>
                    @endforeach
                </ul>
                <div class="reset"><input class="button-reset" type="reset" value="Reset"></div>
                <div class="submit"><input class="button-submit" type="submit" value="Cerca"></div>
                <div class="clear"></div>
            </form>
        </div>
            <div class="content-catalogo">
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
                    <a href="{{route('offerta',[$promotion->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a>
                </div>
                
                </div>
            @endforeach 
        </div>
            <div class="clear"></div>
            </div>
        </div>
@endsection