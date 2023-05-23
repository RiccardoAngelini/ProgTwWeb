@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
    
<div class="title" style="margin-top: 50px;">
     <table><h1 style="text-align: center; font-size:50px;">LISTA AZIENDE</h1>
</div>
<div  style="margin-left: 17%; font-size;20px; margin-top:25px; text-decoration:none;">
    <a class="creat" href="{{route('admin.newCompany')}}">Crea nuova AZIENDA</a>
</div>
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

<div class="div-faq">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome Azienda</th>
                <th>Location</th>
                <th>Immagine</th> 
                <th style="width: 40px">Options</th>
            </tr>
        </thead>
        <tbody>
        @if ($company -> isNotEmpty())
                @foreach ($company  as $companies)
                    <tr>
                        <td>{{$companies-> comp_Id}}</td>
                        <td>{{$companies->name}}</td>
                        <td>{{$companies->location}}</td>
                        <td>{{$companies->image}}</td>
                        <td><a class="btn1" href="#">Modifica</a></td> 
                        <td><a class="btn2" href="#">Visualizza</a></td>
                        <td>
                            <form  action="#"
                                onclick="return confirm('Sei sicuro di voler cancellare questa Azienda ?') " method="post">
                                <button class="btn3" type="submit">Elimina</button>
                            @csrf
                            @method('delete')
                        </form>
                        </td>
                        
                    </tr>  
                @endforeach 
            @else
                    <tr>
                        <td colspan="6">Inserimento non trovato</td>
                    </tr>
            @endif
        </tbody>
    </table>
 <div class="pag">{{$company -> withQueryString()->links('pagination.paginator')}}</div>
</div>

<script>
    function deleteFaq(comp_Id){
        if(confirm('Vuoi cancelare questa Azienda ?')){
            document.getElementById('azienda-edit-action-' + id).submit();
        }
    }
</script>

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