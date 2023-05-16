@extends('layouts.public')
@section('content')
   
<div class="main-aziende">
                <div class="content-aziende">
                
                    <div class="azienda">
                    @foreach ($aziende as $company)
                <div class="azienda1">
                    {{$company->name}}
                </div>
                @endforeach()
                </div>
                </div>
            </div>
        
        
@endsection