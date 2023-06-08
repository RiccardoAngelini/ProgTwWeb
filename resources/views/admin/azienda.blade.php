@extends('layouts.public')
@section('title', 'Azienda')
@section('content')

@can('isAdmin')

<a class="btn2" href="{{route('admin.listaziende')}}" style="margin-left: 50%; margin-top:10px;" >Lista Aziende</a>
@endcan
<div class="cont-azienda">
    
<div id="imageContainer" class="cont-img-off">
@if (file_exists(public_path('images/companies/' . $azienda->image)))
@include('helpers/companyImg', ['imgFile' => $azienda->image])
@else
<img src="{{ asset('images/companies/default.jpg') }}" class="img">
@endif


</div>
<script>
$(document).ready(function() {
  $('#imageContainer').animate({ opacity: 1 }, 500); // Imposta una durata di 2 secondi (2000 millisecondi)
});


</script>
<div class="dettagli-azienda">
        <div class="nome-off">{{$azienda->name}}
        </div>
        <br>
        <div class="prezzo-off"> <strong>Località: </strong> {{$azienda->location}}</div>
        <br>
        <div class="prezzo-off"><strong>Ragione Sociale: </strong> {{$azienda->ragione_sociale}}</div>
        <br>
        <div class="prezzo-off"><strong>Tipologia: </strong> {{$azienda->tipologia}}</div>
        <br>
        <div class="prezzo-off" ><strong>Descrizione: </strong> {{$azienda->desc}}</div>
        
        
         <div style=" clear:right"></div>
    </div>

    </div>

@endsection

