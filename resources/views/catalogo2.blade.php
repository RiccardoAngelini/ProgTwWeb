@extends('layouts.public')
@section('content')
<div class="content-catalogo">
@isset($promos_by_comp)
    //promos by comp:  
@foreach($promos_by_comp as $prom_by_comp)
{{$prom_by_comp->name}}
@endforeach
@endisset
@isset($promos)
//promo by name: 
@foreach($promos as $promo)
{{$promo->name}}
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
</div>
            <div class="clear"></div>
            </div>
        </div> 
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
</div>
            <div class="clear"></div>
            </div>
        </div> 
        @endisset   
@endsection