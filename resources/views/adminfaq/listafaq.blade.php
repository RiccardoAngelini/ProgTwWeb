@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
    
<div class="title" style="margin-top: 50px;">
     <table><h1 style="text-align: center; font-size:50px;">LISTA FAQ</h1>
</div>
<div  style="margin-left: 17%; font-size;20px; margin-top:25px; text-decoration:none;">
    <a class="creat" href="{{route('adminfaq.create')}}">Crea nuova FAQ</a>
</div>

    @if (session('status'))
        <div class="alert alert-success" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
         {{ session('status') }}
        </div>
     @endif
    @if (session('error'))
       <div class="alert alert-success" role="alert" style="display:flex; justify-content:center;margin-left:260px;">
         {{ session('error') }}
    @endif
<div class="div-faq">
        <thead>
            <tr>
                <th>faq_Id</th>
                <th>Question</th>
                <th>Answer</th> 
                <th style="width: 40px">Update</th>
                <th style="width: 40px">Show</th>
                <th style="width: 40px">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if ($faq -> isNotEmpty())
                @foreach ($faq  as $faqs)
                    <tr>
                        <td>{{$faqs-> id}}</td>
                        <td>{{$faqs->question}}</td>
                        <td>{{$faqs->answer}}</td>
                        <td><a class="btn1" href="{{route('adminfaq.edit', $faqs -> id )}}">Modifica</a></td> 
                        <td><a class="btn2" href="{{route('faq2',['faq_Id' => $faqs->id])}}">Visualizza</a></td>
                        <td>
                            <form  action="{{route('adminfaq.destroy', $faqs->id )}}"
                                onclick="return confirm('Sei sicuro di voler cancellare questa FAQ ?') " method="post">
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
 <div class="pag">{{$faq -> withQueryString()->links('pagination.paginator')}}</div>
</div>

<script>
    function deleteFaq(id){
        if(confirm('Vuoi cancelare questa Faq ?')){
            document.getElementById('faq-edit-action-' + id).submit();
        }
    }
</script>
    
@endsection