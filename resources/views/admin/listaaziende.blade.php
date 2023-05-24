@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
    
<div class="title" style="margin-top: 50px;">
     <table><h1 style="text-align: center; font-size:50px;">LISTA AZIENDE</h1>
</div>
<div  style="margin-left: 17%; font-size;20px; margin-top:25px; text-decoration:none;">
    <a class="creat" href="{{route('newCompany' )}}">Crea nuova AZIENDA</a>
</div>
@if (Session::has('success'))
<div class="alert alert-success" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
        {{Session::get('success')}}
    </div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
            {{ Session::get('error')}}
        </div>
    @endif

<div class="div-faq">
        <thead>
            <tr>
                <th>Azienda_Id</th>
                <th>Nome Azienda</th>
                <th>Location</th>
                <th>Immagine</th> 
                <th style="width: 40px">modifica</th>
                <th style="width: 40px">visualizza</th>
                <th style="width: 40px">elimina</th>
            </tr>
        </thead>
        <tbody>
        @if ($company -> isNotEmpty())
                @foreach ($company  as $companies)
                    <tr>
                        <td>{{$companies->comp_Id}}</td>
                        <td>{{$companies->name}}</td>
                        <td>{{$companies->location}}</td>
                        <td>{{$companies->image}}</td>
                        <td><a class="btn1" href="{{route('adminCompany.edit',$companies->comp_Id)}}">Modifica</a></td> 
                        <td><a class="btn2" href="{{route('aziende')}}">Visualizza</a></td>
                        <td>
                            <form  action="{{route('adminCompany.destroy', $companies->comp_Id )}}"
                                onclick="return confirm('Sei sicuro di voler cancellare questa Azienda ?') " method="post">
                                <button class="btn3" type="submit">Elimina</button>
                            @csrf
                            @method('delete')
                        </form>
                        </td>
                        
                    </tr>  
                @endforeach 
            @endif
        </tbody>
    </table>
    @isset($company)
@include('pagination.paginator',['paginator'=>$company])
@endisset
</div>


<script>
    function deleteFaq(comp_Id){
        if(confirm('Vuoi cancelare questa Azienda ?')){
            document.getElementById('azienda-edit-action-' + comp_Id).submit();
        }
    }
</script>
@endsection