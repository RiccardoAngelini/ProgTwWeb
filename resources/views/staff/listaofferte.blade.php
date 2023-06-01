
@extends('layouts.staff')
@section('content')
    

@if (session('status'))
<div class="alert alert-success" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
 {{ session('status') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-success" role="alert" style="display:flex; justify-content:center;margin-left:260px;">
 {{ session('error') }}
@endif

<div class="title" style="margin-top: 50px;">
     <table><h1 style="text-align: center; font-size:50px;">LISTA PROMOZIONI</h1>
</div>
<div  style="margin-left: 17%; font-size;20px; margin-top:25px; text-decoration:none;">
    <a class="creat" href="{{route('staff.create')}}">Crea nuova promozione</a>
</div>
<div class="div-prom">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrizione</th> 
                <th>Prezzo</th>
                <th>Sconto</th>
                <th>Imagine</th>
                <th>Azienda</th>
                <th>Luogo di Fruizione</th>
                <th>Metodo di fruizione</th>
                <th>Data Inizio</th>
                <th>Data fine</th>
                <th style="width: 40px">Modifica</th>
                <th style="width: 40px">Visualizza</th>
                <th style="width: 40px">Elimina</th>

            </tr>
        </thead>
        <tbody>
            @if ($promotion -> isNotEmpty())            
                @foreach ($promotion as $promotions)
                    <tr>
                        <td>{{$promotions->promo_Id}}</td>
                        <td>{{$promotions->name}}</td>
                        <td>{{$promotions->desc}}</td>
                        <td>{{$promotions->price}}</td>
                        <td>{{$promotions->discountPerc}}%</td>
                        <td>{{$promotions->image}}</td>
                        <td>{{$promotions->comp_name}}</td>
                        <td>{{$promotions->luogo_di_fruizione}}</td>
                        <td>{{$promotions->metodo_di_fruizione}}</td>
                        <td>{{$promotions->date_start}}</td>
                        <td>{{$promotions->date_end}}</td>
                        <td><a class="btn1" href="{{route('staff.edit', $promotions -> promo_Id)}}">Modifica</a></td>

                        <td><a class="btn2" href="{{route('offerta',[$promotions->promo_Id])}}">Visualizza</a></td>
                        <td>
                            <form action="{{route('staff.delete', $promotions -> promo_Id)}}"
                                onclick="return confirm('Sei sicuro di voler cancellare questa promozione ?') " method="POST">
                                <button class="btn3" type="submit">Elimina</button>
                                @method('DELETE')
                                @csrf 
                            </form>
                        </td>
                        {{-- <td><a class="btn1" href="{{route('staff.edit',[$promotions->promo_Id])}}">Modifica</a></td>   --}}
                    </tr>
                @endforeach
                @else
            @endif
        </tbody>
    </table>
<div class="pag">{{$promotion -> withQueryString()->links('pagination.paginator')}}</div>  
</div>      
@endsection
