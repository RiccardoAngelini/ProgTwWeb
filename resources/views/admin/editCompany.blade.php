@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
<div class="button-back2">
<a class="btn2" href="{{route('admin.listaziende')}}">Indietro</a></div>
<div class="title" style="margin-top: 50px;">
    <table><h1 style="text-align: center; font-size:50px;">Modifica Azienda</h1>
</div>

    <h2 style="margin-left: 25%; margin-top:70px;">Inserisci azienda</h2>
    <div class="faq-form" style="margin-top: 30px;">
    {{ Form::open(['route' => ['adminCompany.update', $company->comp_Id], 'files'=>true]) }}
    {{ csrf_field() }}

    <div class="input-box" style="width: 100%;">
        {{ Form::label('name', 'Nome :') }}
        {{ Form::text('name', old('name', $company->name), ['id' => 'name']) }}
        <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box" style="width: 100%;">
        {{ Form::label('location', 'Città :') }}
        {{ Form::text('location', old('location', $company->location), ['id' => 'location']) }}
        <ul class="errors">
                    @foreach ($errors->get('location') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box" style="width: 100%;">
        {{ Form::label('ragione_sociale', 'Ragione Sociale :') }}
        {{ Form::text('ragione_sociale', old('ragione_sociale', $company->ragione_sociale), ['id' => 'ragione_sociale']) }}
        <ul class="errors">
                    @foreach ($errors->get('ragione_sociale') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="form-group">
        {{ Form::label('desc', 'Descrizione :') }}
        {{ Form::textarea('desc', old('desc', $company->desc), ['id' => 'desc', 'rows' => 4, 'placeholder' => 'Inserire una descrizione', 'class' => 'form-control' . ($errors->has('desc') ? ' is-invalid' : '')]) }}
        <ul class="errors">
                    @foreach ($errors->get('desc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
    </div>

    <div  class="input-box0">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', [ 'id' => 'image']) }}
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
    </div>




    {{ Form::submit('Salva',['class' => 'button-login']) }}
    {{ Form::close() }}

    </div>

@endsection