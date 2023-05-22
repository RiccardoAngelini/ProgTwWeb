@extends('layouts.public')
@section('title','FAQ')
@section('content')
<div class="faq-header">Frequently Asked Questions</div>
@foreach ($listafaq as $index => $faqs)
    <div class="faq-content">
        <div class="faq-question">
            <input id="q{{ $index }}" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q{{ $index }}" class="panel-title">{{ $faqs->question }}</label>
            <br>
            <div class="panel-content">
                {{ $faqs->answer }}
            </div>
        </div>
    </div>
@endforeach
@endsection