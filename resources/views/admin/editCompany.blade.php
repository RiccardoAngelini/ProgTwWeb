@extends('layouts.admin')
@section('content')
<div class="faq-header"></div>
<div class="title" style="margin-top: 50px;">
    <table><h1 style="text-align: center; font-size:50px;">Modifica Azienda</h1>
</div>

    <h2 style="margin-left: 25%; margin-top:70px;">inserisci la domanda</h2>
    <div class="faq-form" style="margin-top: 30px;">
        <form  role="form" action="#" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="question">Nome :</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $company -> name)}}" >
                    @error('name')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group">
                <label for="answer">location :</label>
                <input id="location" name="location" class="form-control @error('location') is-invalid @enderror" value="{{old('location', $company -> location)}}">
                    @error('location')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
            </div>
            <button type="submit">Salva</button>
        </form>
    </div>
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
        .btn a{
        background-color: #2854e3;
        border: none;
        color: white;
        padding: 5px 20px; 
        text-align: center;
        text-decoration: none;
        font-size: 17px;
        margin: 0.5px 0px;
        cursor: pointer;
        style="margin-left: 17%
    }
    </style> 


@endsection