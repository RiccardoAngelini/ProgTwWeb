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
                {{$promotion->price}} &#8364;
            </div>
            <div class="cont-img">
                    @include('helpers/promotionImg', ['imgFile' => $promotion->image])
                </div>
                </div>
            @endforeach 
        </div>
            <div class="clear"></div>
            </div>
        </div>
@endsection