@extends('layouts.public')
@section('content')
<div class="faq-header">Frequently Asked Questions</div>
@foreach ($listafaq as $faqs)
      <div class="faq-content">
      <div class="faq-question">
        <input id="q1" type="checkbox" class="panel">
        <div class="plus">+</div>
        <label for="q1" class="panel-title">{{$faqs->question}}</label>
        <div class="panel-content">{{$faqs->answer}}</div>
      </div>
@endforeach 


@endsection