
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
    <a class="creat" href="{{route('product.create')}}">Crea nuova promozione</a>
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
                <th>Categoria</th>
                <th>Data Inizio</th>
                <th>Data fine</th>
                {{-- <th>Azienda</th> --}}
                <th style="width: 40px">Show</th>
                <th style="width: 40px">Delete</th>
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
                        <td>{{$promotions->date_start}}</td>
                        <td>{{$promotions->date_end}}</td>
                        <td><a class="btn1" href="{{route('product.show',[$promotions->promo_Id])}}">Visualizza</a></td>
                        <td>
                            <form action="{{route('product.delete', $promotions -> promo_Id)}}"
                                onclick="return confirm('Sei sicuro di voler cancellare questa promozione ?') " method="POST">
                                <button class="btn3" type="submit">Cancelli</button>
                                @method('DELETE')
                                @csrf 
                                 
                            </form>
                        </td>  
                    </tr>
                @endforeach
                @else
            @endif
        </tbody>
    </table>
<div class="pag">{{$promotion -> withQueryString()->links('pagination.paginator')}}</div>  
</div>

<style>

    body {
        font-family: Arial, sans-serif;
    }

    .creat {
        background-color: #2854e3;
        border: none;
        color: white;
        padding: 5px 20px; 
        text-align: center;
        text-decoration: none;
        font-size: 17px;
        margin: 0.5px 0px;
        cursor: pointer;
        style="margin-left: 17%;
    }
    .pag{
        text-align: center; 
        margin-top: 1em;
        padding-bottom: 5em;
    }
    table {
        width: 90%;
        border-collapse: collapse;
        margin-left: 5%;
        margin-top: 3em;
        
    }
    table th, table td {
        padding: 5px;
        border: 1px solid #ccc;
    }
    table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    .btn1 {
        background-color: #4caf50;
        border: none;
        color: white;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 17px;
        margin: 0.5px 0px;
        cursor: pointer;
        border-radius: 1.5em;
    }
    .btn2 {
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 17px;
        margin: 0.5px 0px;
        cursor: pointer;
        border-radius: 1.5em;
    }
    .btn3 {
        background-color: #f44336;
        border: none;
        color: white;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 17px;
        margin: 0.5px 0px;
        cursor: pointer;
        border-radius: 1.5em;
    }
</style>

      
@endsection
