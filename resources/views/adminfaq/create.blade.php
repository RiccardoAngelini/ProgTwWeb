@extends('layouts.admin')
@section('content')

<div class="faq-header"></div>
<div class="btn" style="text-align: center; ;margin-top: 50px;"><a href="{{route('faq.index')}}">Indietro</a></div>
<div class="title" style="margin-top: 50px;">
    <table><h1 style="text-align: center; font-size:50px;">Aggiungi Faq</h1>
</div>

    <h2 style="margin-left: 25%; margin-top:70px;">inserisci la domanda</h2>
    <div class="faq-form" style="margin-top: 30px;">
    {{ Form::open(['route' => 'adminfaq.store', 'role' => 'form']) }}
    {{ csrf_field() }}

    <div class="form-group">
        {{ Form::label('question', 'Domanda :',['class' => 'details' ]) }}
        {{ Form::text('question', old('question'), ['id' => 'question', 'placeholder' => 'Inserire la domanda']) }}
        <ul class="errors">
                    @foreach ($errors->get('question') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
    </div>

    <div class="form-group">
        {{ Form::label('answer', 'Risposta :',['class' => 'details' ]) }}
        {{ Form::textarea('answer', old('answer'), ['id' => 'answer', 'rows' => 4, 'placeholder' => 'Inserire una risposta' ]) }}
<ul class="errors">
                    @foreach ($errors->get('answer') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>    </div>

    {{ Form::submit('Aggiungi', ['class' => 'button-login']) }}
{{ Form::close() }}

    </div>
@endsection