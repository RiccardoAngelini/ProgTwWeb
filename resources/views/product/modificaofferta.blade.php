@extends('layouts.staff')
@section('content')

    <a class="btn2" href="{{route('product.show', [$promotion->promo_Id])}}" style="text-align: center; margin-left:50%;">Back</a>

    <h1 >Modifica promozione</h1>

<div class="container">
    {{ Form::open('route' => ['product.update', $promotion->promo_Id], 'role' => 'form']) }}
    {{ csrf_field() }}
    <div class="user-details">
    <div class="input-box">
        {{ Form::label('name', 'Nome Prodotto :') }}
        {{ Form::text('name', old('name', $promotion->name), ['id' => 'name']) }}
        <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box">
        {{ Form::label('price', 'Prezzo :') }}
        {{ Form::text('price', old('price', $promotion->price), ['id' => 'price']) }}
        <ul class="errors">
                    @foreach ($errors->get('price') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box">
        {{ Form::label('comp_name', 'Azienda :') }}
        {{ Form::text('comp_name', old('comp_name', $promotion->comp_name), ['id' => 'comp_name']) }}
        <ul class="errors">
                    @foreach ($errors->get('comp_name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box">
        {{ Form::label('date_start', 'Data Inizio Promozione:') }}
        {{ Form::date('date_start', old('date_start', $promotion->date_start), ['id' => 'date_start']) }}
        <ul class="errors">
                    @foreach ($errors->get('date_start') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>
    <div class="input-box">
        {{ Form::label('date_end', 'Data Fine Promozione:') }}
        {{ Form::date('date_end', old('date_end', $promotion->date_end), ['id' => 'date_end']) }}
        <ul class="errors">
                    @foreach ($errors->get('date_end') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box">
        {{ Form::label('discountPerc', 'Sconto :') }}
        {{ Form::text('discountPerc', old('discountPerc', $promotion->discountPerc), ['id' => 'discountPerc']) }}
        <ul class="errors">
                    @foreach ($errors->get('discountPerc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="row1">
        {{ Form::label('desc', 'Descrizione :') }}
        {{ Form::textarea('desc', old('desc', $promotion->desc), ['id' => 'desc']) }}
        <ul class="errors">
                    @foreach ($errors->get('desc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

                {{ Form::submit('Salva',['class' => 'button-login']) }}
</div>
          
    {{ Form::close() }}
</div>


      <style>
        * {
          box-sizing: border-box;
        }
        h1{
            text-align: center;
            font-size: 40px;
            margin-top: 2em;
        }
        
        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }
        
        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }
        .btn11 {
        background-color: #ff7a57;
        border: none;
        color: white;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 0.5px 0px;
        cursor: pointer;
        border-radius: 0.3em;
        width: 100%
    }
    .btn2 {
        background-color: #edb707;
        border: none;
        color: white;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 0.5px 0px;
        cursor: pointer;
        border-radius: 0.3em;
        margin-top: 1em;
    }
        a[type=btn11] {
          background-color: #deba29;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }
        
        a[type=btn11]:hover {
          background-color: #45a049;
        }
        
        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 40px;
          margin-left: 30%;
          margin-top:3em;
          margin-bottom: 2em;
        }
        
        .col-25 {
          float: left;
          width: 55%;
          margin-top: 6px;
          margin-left: 1em;
        }
        
        .col-75 {
          float: left;
          width: 100%;
          margin-top: 6px;
          margin-left: 1em;
        }
        
        /* Clear floats after the columns */
        .row1{
              margin-top: 1em;
              margin-left: 1em;
              
        }
        .row:after {
          content: "";
          display: table;
          clear: both;
        
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }
        </style>
 @endsection
