@extends('layouts.public')
@section('title', 'Aziende')
@section('content')
   
<div class="main-aziende">
                <div class="content-aziende">
                
                    <div class="azienda">
                    @foreach ($aziende as $company)
                <div class="azienda1">
                    <a class="dettagli-az" href="{{route('aziendaPublic',$company->comp_Id)}}">
                    <div class="nome-az">
                        {{$company->name}}  
                    </div>
                    <div class="cont-az">
                    @if (file_exists(public_path('images/companies/' . $company->image)))
                    @include('helpers/companyImg', ['imgFile' => $company->image])
                    @else
                    <img src="{{ asset('images/companies/default.jpg') }}" class="img">

                    @endif
                        
                    </div>
                    <div class="colore">.</div>
                    <div class="nome-az2">
                        {{$company->location}}  
                    </div></a>
                </div>
                
                
                    
                @endforeach
                </div>
                </div>
                
            </div>
            @isset($aziende)
                @include('pagination.paginator',['paginator'=>$aziende])
                @endisset
        
@endsection