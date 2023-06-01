@extends('layouts.public')
@section('title', 'Home')
@section('content')

 <div class="logos">
      <div class="logos-slide">
      @foreach($companies2 as $company)
      <a href="{{route('aziende')}}">
        <img src="{{ asset('images/companies/'. $company->image) }}" />
    </a>
        @endforeach
      </div>
    </div>

    <div class="offerte">SCOPRI LE OFFERTE</div>
   <div class="coupon-home">
   @foreach($proms as $prom)     
            <div class="coupon1">
            <div class="nome-prom">
                {{$prom->price}} &#8364;<br>
                Sconto del {{$prom->discountPerc}} &#37;
            </div>
            {{-- <div class="cont-img">
                    @include('helpers/promotionImg', ['attrs' => 'imagefrm','imgFile' => $prom->image])
            </div> --}}

                <div class="cont-img">
                    @if (file_exists(public_path('images/promotions/' . $prom->image)))
                        @include('helpers/promotionImg', ['attrs' => 'imagefrm', 'imgFile' => $prom->image])
                    @else
                        <img src="{{ asset('images/promotions/default.jpg') }}" class="img">
                    @endif
                </div>

                <div class="cont-data">
                    <div class="data">
                    Inizia il {{ DateTime::createFromFormat('d/m/Y', $prom->date_start)->format('d/m/Y') }}
                    </div>
                    @include('helpers/remainingDays',['expirationDate' => $prom->date_end])
                    <div class="nome">
                    {{$prom->name }}
                    </div>
                    <hr>
                    <div class="desc">
                        {{$prom->desc }}
                        </div>
            </div>
                    <div calss="scopri-off">
                    <a href="{{route('offerta',[$prom->promo_Id])}}"><button class="scopri" >
                        Scopri l'offerta
                </button></a></div>
                </div>
                @endforeach
                </div>
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
                <div class="colore">.</div>
                    <div class="nome-az2">
                        {{$company->location}}  
                    </div>
                </div>   
                @endforeach

    <div class="clear"></div>
    </div>
    <div class="veditutte"><a href="{{route('aziende')}}">Vedi tutte</a></div>
    </div>
</div>
@endsection