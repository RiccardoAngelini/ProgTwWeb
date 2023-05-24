@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
<div class="btn" style="text-align: center; ;margin-top: 50px;"><a href="{{route('admin.listaziende')}}">Indietro</a></div>
<div class="title" style="margin-top: 50px;">
    <table><h1 style="text-align: center; font-size:50px;">Modifica Azienda</h1>
</div>

    <h2 style="margin-left: 25%; margin-top:70px;">Inserisci azienda</h2>
    <div class="faq-form" style="margin-top: 30px;">
    {{ Form::open(['route' => ['adminCompany.update', $company->comp_Id], 'role' => 'form']) }}
    {{ csrf_field() }}

    <div class="input-box">
        {{ Form::label('name', 'Nome :') }}
        {{ Form::text('name', old('name', $company->name), ['id' => 'name']) }}
        <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box">
        {{ Form::label('location', 'Città :') }}
        {{ Form::text('location', old('location', $company->location), ['id' => 'location']) }}
        <ul class="errors">
                    @foreach ($errors->get('location') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    {{ Form::submit('Salva',['class' => 'button-login']) }}
    {{ Form::close() }}

    </div>

@endsection