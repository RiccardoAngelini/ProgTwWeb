@extends('layouts.admin')
@section('content')


<main class="maina">
    <h1>Lista Promozioni</h1>

    <div class="side_wrapper_utenti">
        <section class="about-dev-utenti">
                <ul class="lista_utenti">
                    @foreach ($promos as $promo)
                        <li>
                       
                        <a href="{{route('promo.statistiche',['promo_id'=>$promo->promo_Id])}}">Promozione: {{ $promo->promo_Id }} - {{ $promo->name }}</a>
                        </li>
                    @endforeach
                </ul>
                
        </section>
    </div>
    @isset($promos)
@include('pagination.paginator',['paginator'=>$promos])
@endisset
</main>



@endsection