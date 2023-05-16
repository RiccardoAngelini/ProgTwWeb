@extends('layouts.public')
@section('content')
<div class="main">
        <div class="leftnav">
            <div id="aziende">Aziende</div>
            <form class="form-aziende">
                <ul class="lista-aziende">
                    <li><label><input class="radio" type="radio" name="Azienda1">Azienda1</label></li>
                    <li><label><input class="radio" type="radio" name="Azienda2">Azienda2</label></li>
                    <li><label><input class="radio" type="radio" name="Azienda3">Azienda3</label></li>
                    <li><label><input class="radio" type="radio" name="Azienda4">Azienda4</label></li>
                    <li><label><input class="radio" type="radio" name="Azienda5">Azienda5</label></li>
                    <li><label><input class="radio" type="radio" name="Azienda6">Azienda6</label></li>
                </ul>
                <div class="reset"><input class="button-reset" type="reset" value="Reset"></div>
                <div class="submit"><input class="button-submit" type="submit" value="Cerca"></div>
                <div class="clear"></div>
            </form>
        </div>
            <div class="content-catalogo">
                <div class="coupon">
            <div class="coupon1">PROMOZIONE1</div>
            <div class="coupon1">PROMOZIONE2</div>
            <div class="coupon1">PROMOZIONE3</div>
            <div class="coupon1">PROMOZIONE4</div>
            <div class="clear"></div>
            </div>
            </div>
        </div>
@endsection