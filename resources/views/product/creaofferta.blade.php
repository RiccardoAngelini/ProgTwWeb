@extends('layouts.staff')
@section('content')
<div class="content1-registrazione">  
<!--<a class="btn2" href="{{route('product.index')}}">Back</a>-->
<div class="container">
    <h1 >Agggiungi una nuova promozione</h1>
    <div class="content-registrazione">
    @if (Session::has('success'))
<div class="alert alert-success" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
        {{Session::get('success')}}
    </div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
            {{ Session::get('error')}}
        </div>
    @endif

    {{ Form::open(array('route' => 'product.store','files' => true)) }}
    {{ csrf_field() }}
    <div class="user-details">

            <div class="input-box">
               {{ Form::label('name', 'Nome prodotto', ['class' => 'details']) }}
               {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome prodotto']) }}
               @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            
            <div class="input-box">
               {{ Form::label('price', 'Prezzo', ['class' => 'details']) }}
               {{ Form::text('price', null, ['placeholder' => 'Inserisci il prezzo']) }}
               @if ($errors->first('price'))
                <ul class="errors">
                    @foreach ($errors->get('price') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="input-box">
               {{ Form::label('comp_name', 'Azienda', ['class' => 'details']) }}
               {{ Form::text('comp_name', null, ['placeholder' => 'Inserisci l azienda']) }}
               @if ($errors->first('comp_name'))
                <ul class="errors">
                    @foreach ($errors->get('comp_name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="input-box">
               {{ Form::label('date_start', 'Data inizio promozione :', ['class' => 'details']) }}
               {{ Form::date('date_start', null, ['placeholder' => 'Inserisci la data di inizio']) }}
               @if ($errors->first('date_start'))
                <ul class="errors">
                    @foreach ($errors->get('date_start') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="input-box">
               {{ Form::label('date_end', 'Data fine promozione :', ['class' => 'details']) }}
               {{ Form::date('date_end', null, ['placeholder' => 'Inserisci la data di fine']) }}
               @if ($errors->first('date_end'))
                <ul class="errors">
                    @foreach ($errors->get('date_end') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="input-box">
               {{ Form::label('discountPerc', 'Sconto', ['class' => 'details']) }}
               {{ Form::text('discountPerc', null, ['placeholder' => 'Inserisci lo sconto']) }}
               @if ($errors->first('discountPerc'))
                <ul class="errors">
                    @foreach ($errors->get('discountPerc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
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

            <div class="input-box">
               {{ Form::label('desc', 'Descrizione :', ['class' => 'details']) }}
               {{ Form::textarea('desc', null, ['placeholder' => 'Inserisci la descrizione']) }}
               @if ($errors->first('desc'))
                <ul class="errors">
                    @foreach ($errors->get('desc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                </div>
            {{ Form::submit('Registra promozione',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>

<!--
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
        margin-left:50%;
    }
        
        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }
        .btn11 {
        background-color:  #ff7a57;
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
              margin-left: 3em;
              
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
        </style>-->
 @endsection
