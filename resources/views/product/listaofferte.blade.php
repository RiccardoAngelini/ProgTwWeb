
@extends('layouts.staff')
@section('content')
    {{-- <h1 style="text-align: center; margin-top:2em;">LISTA PROMOZIONI</h1> --}}
    
<div class="title" style="margin-top: 50px;">
     <table><h1 style="text-align: center; font-size:50px;">LISTA PROMOZIONI</h1>
</div>
<div  style="margin-left: 17%; font-size;20px; margin-top:25px; text-decoration:none;">
    <a class="creat" href="">Crea nuova promozione</a>
</div>
{{-- 
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-danger">
            {{ Session::get('error')}}
        </div>
    @endif
--}}
<div class="div-faq">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrizione</th> 
                <th>Prezzo</th>
                <th>Sconto</th>
                <th>Imagine</th>
                <th>Categoria</th>
                <th style="width: 40px">Update</th>
                <th style="width: 40px">Show</th>
                <th style="width: 40px">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if ($promotion -> isNotEmpty())
                
            
                @foreach ($promotion as $promotions)
                    <tr>
                        <td>{{$promotions -> promo_Id}}</td>
                        <td>{{$promotions->name}}</td>
                        <td>{{$promotions->desc}}</td>
                        <td>{{$promotions->price}}</td>
                        <td>{{$promotions->discountPerc}}%</td>
                        <td>{{$promotions->image}}</td>
                        <td>{{$promotions->comp_name}}</td>
                        <td><a class="btn1" href="">Modifica</a></td>
                        <td><a class="btn2" href="">Visualizza</a></td> 
                        <td><a class="btn3" href="#" onclick="deleteFaq({{$promotions -> promp_Id}})">Cancella</a></td>
                    </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6">Inserimento non trovato</td>
                </tr>
            @endif
            
        </tbody>
    </table>
<div class="pag">{{$promotion -> withQueryString()->links('pagination.paginator')}}</div> 
</div>

{{-- <script>
    function deleteFaq(id){
        if(confirm('Vuoi cancelare questa Faq ?')){
            document.getElementById('faq-edit-action-' + id).submit();
        }
    } 
</script> --}}

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
        width: 80%;
        border-collapse: collapse;
        margin-left: 16%;
        margin-top: 3em;
        
    }
    table th, table td {
        padding: 10px;
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