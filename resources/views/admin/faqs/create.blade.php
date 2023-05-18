@extends('layouts.admin')
@section('content')
   <style>
        body {
            font-family: Arial, sans-serif;
        }
        .faq-form {
            margin-top:7em;
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .faq-form h2 {
            margin-top: 0;
        }
        .faq-form .form-group {
            margin-bottom: 20px;
        }
        .faq-form label {
            display: block;
            font-weight: bold;
        }
        .faq-form input[type="text"],
        .faq-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        .faq-form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .faq-form button:hover {
            background-color: #45a049;
        }
    </style> 

<div class="faq-header"></div>
<div class="btn" style="text-align: center; margin-top: 50px;"><a href="{{route('index')}}">Back</a></div>
<div class="title" style="margin-top: 50px;">
    <table><h1 style="text-align: center; font-size:50px;">Aggiungi Faq</h1>
</div>

    <h2 style="margin-left: 25%; margin-top:70px;">inserisci la domanda</h2>
    <div class="faq-form" style="margin-top: 30px;">
        
        <form  role="form" action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="question">Question :</label>
                <input type="text" id="question" name="question" required>
            </div>
            <div class="form-group">
                <label for="answer">Answer :</label>
                <textarea id="answer" name="answer" rows="4" required></textarea>
            </div>
            <button type="submit">Agguingi</button>
        </form>
    </div>
@endsection