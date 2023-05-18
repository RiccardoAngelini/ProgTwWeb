@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
    
<div class="title" style="margin-top: 50px;">
     <table><h1 style="text-align: center; font-size:50px;">Lista Faq</h1>
</div>
<div class="creat" style="margin-left: 17%; font-size;20px; margin-top:25px; text-decoration:none;">
    <a href="{{route('create')}}">Crea nuova Faq</a>
</div>
<div class="div-faq">
        <thead>
            <tr>
                <th>faq_id</th>
                <th>Question</th>
                <th>Answer</th> 
                <th style="width: 40px">Edit</th>
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
{{-- {{route('edit',['faq_id' => $faqs->faq_id])}}
{{route('show',['faq_id' => $faqs->faq_id])}}
"{{route('destroy',['faq_id' => $faqs->faq_id])}}"onclick="return confirm('Vuoi cancelare questa Faq ?')"  --}}
                    <td><a href="">Edit</a></td>
                    <td><a href="">Visualizza</a></td>
                    <td><a href=>Cancella</a></td>
                </tr> 
            @endforeach  
           
        </tbody>
    </table>
</div>
<style>
    body {
        font-family: Arial, sans-serif;
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
</style>
    
@endsection