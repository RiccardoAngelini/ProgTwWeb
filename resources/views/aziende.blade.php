@extends('layouts.public')
@section('title', 'Aziende')
@section('content')
   
<div class="main-aziende">
                <div class="content-aziende">
                
                    <div class="azienda">
                    @foreach ($aziende as $company)
                <div class="azienda1">
                    <div class="nome-az">
                        {{$company->name}}  
                    </div>
                    <div class="cont-az">
                        @include('helpers/companyImg', ['imgFile' => $company->image])
                    </div>
                    <div class="colore">.</div>
                    <div class="nome-az2">
                        {{$company->location}}  
                    </div>
                </div>
                
                
                    
                @endforeach
                </div>
                </div>
                
            </div>
            @isset($aziende)
                @include('pagination.paginator',['paginator'=>$aziende])
                @endisset
        
@endsection