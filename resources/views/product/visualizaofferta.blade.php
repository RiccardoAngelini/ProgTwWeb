@extends('layouts.staff')
@section('title', 'Promozione')
@section('content')
@isset($promotion)
<div class="cont-off">
    <div class="cont-img-off">
      <a class="btn2" href="{{route('product.index', [$promotion->promo_Id])}}" >Back</a>

        <div class="wrapper">
            <div class="product-img" style="height=300; width=327">
                 @include('helpers/promotionImg', ['imgFile' => $promotion->image]) 
            </div>
            <div class="product-info">
              <div class="product-text">
                    <h1>{{$promotion->name}}</h1>
                    <h3 style="margin-left: 5em; margin-top:0.5em;">Azienda: {{$promotion->comp_name}}</h3>
                    {!!$promotion->desc!!}
                    <h6 class="h6"></h6>
                    <h6 class="d1">Data inizio: {{$promotion->date_start}}</h6>
                    <h6 class="d1">Data fine: {{$promotion->date_end}}</h6>
              </div>
              <div class="product-price-btn">
                <h4 class="p1">Sconto: {{$promotion->discountPerc}} %</h4>
                <h4 class="p1"><span>Prezzo: {{$promotion->price}}</span>$</h4>
                <a class="bt" href="{{route('product.edit', $promotion -> promo_Id)}}">Modifica L'offerta</a>
              </div>
            </div>
          </div>
    @endisset

          <style>

 .cont-off{
    display:flex;
    justify-content:center;
  }
          
.wrapper {
    height: 550px;
    width: 1100px;
    margin: 50px auto;
    border-radius: 7px 7px 7px 7px;
    -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  }
.d1{
    display:inline-flex;
    margin: px;
    margin-top: 6em;
    font-size: 15px;
    margin-left: 9em;

  }
  .p1{
    display:inline-flex;
    margin: px;
    margin-left: 10em;
  }
  .h6{
    margin-top: 6em;
    margin: px;
    margin-left: 10em;
  }
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
  .product-img {
    float: left;
    height: 420px;
    width: 420px;
  }
  
  .product-img img {
    height:100%;
    width:100%;
    border-radius: 7px 0 0 7px;
  }
  
  .product-info {
    float: left;
    height: 420px;
    width: 340px;
    border-radius: 0 7px 10px 7px;
    background-color: #ffffff;
  }
  
  .product-text {
    height: 300px;
    width: 590px;
  }
  
  .product-text h1 {
    margin: 0 0 0 38px;
    padding-top: 10px;
    font-size: 34px;
    color: #474747;
  }
  
  .product-text h1,
  .product-price-btn p {
    font-family: 'Bentham', serif;
  }
  
  
   .product-text p {
    height: 125px;
    margin: 0 0 0 38px;
   font-family: 'Playfair Display', serif;
   font-size: 20px;
   margin-top: 2em;
  }  
  .product-price-btn {
    height: 103px;
    width: 620px;
    margin-top: 8em;
    position: relative;
  }

  span {
    display: inline-block;
    height: 50px;
    font-family: 'Suranna', serif;
    font-size: 24px;
  }

  .bt{
    background-color: #ff7a57;
        border: none;
        color: white;
        padding: 15px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 0.5px 0px;
        cursor: pointer;
        border-radius: 1.5em;
        margin-left: 9em;
        float: right;
        display: inline-block;
        height: 50px;
        width: 100%;
  }
  
  .product-price-btn a:hover {
    background-color: #96c723;
  }
</style>
    </div> 
</div>


@endsection