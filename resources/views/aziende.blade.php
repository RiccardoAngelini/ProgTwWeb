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
                    <div class="cont-img">
                    @include('helpers/companyImg', ['imgFile' => $company->image])
                </div>
                </div>
                
                
                    
                @endforeach
                </div>
                </div>
            </div>
        
        
@endsection