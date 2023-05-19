@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
    
<div class="title" style="margin-top: 50px;">
     <table><h1 style="text-align: center; font-size:50px;">LISTA FAQ</h1>
</div>
<div  style="margin-left: 17%; font-size;20px; margin-top:25px; text-decoration:none;">
    <a class="creat" href="{{route('create')}}">Crea nuova FAQ</a>
</div>

    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @if (session('success'))
        <div class="alert alert-danger">
            {{ session('error')}}
        </div>
    @endif

<div class="div-faq">
        <thead>
            <tr>
                <th>Id</th>
                <th>Question</th>
                <th>Answer</th> 
                <th style="width: 40px">Update</th>
                <th style="width: 40px">Show</th>
                <th style="width: 40px">Delete</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($faq  as $faqs)
                <tr>

                    <td>{{$faqs-> faq_Id}}</td>
                    <td>{{$faqs->question}}</td>
                    <td>{{$faqs->answer}}</td>
                    <td><a class="btn1" href="{{route('update',['faq_Id' => $faqs->faq_Id])}}">Modifica</a></td>
                    <td><a class="btn2" href="{{route('show',['faq_Id' => $faqs->faq_Id])}}">Visualizza</a></td>
                    <td><a class="btn3" href="{{route('destroy',['faq_Id' => $faqs->faq_Id])}}"onclick="return confirm('Vuoi cancelare questa Faq ?')">Cancella</a></td>
                </tr> 
            @endforeach
        </tbody>
    </table>
    {{-- {!! $faq -> links() !!} --}}
    <div class="pag">{{$faq -> withQueryString()->links('pagination.paginator')}}</div> 
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