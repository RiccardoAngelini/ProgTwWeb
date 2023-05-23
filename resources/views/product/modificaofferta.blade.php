@extends('layouts.staff')
@section('content')
    <h1 >Modifica promozione</h1>

    <div class="container">
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname"> Nome prodotto: </label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" value="{{$promotion->name}}" name="name"  placeholder="Nome del prodotto">
                    @error('name')
                        <span role="alert"> <strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="price">Prezzo: </label>
                </div>
                <div class="col-75">
                    <input type="text" id="price" value="{{$promotion->price}}" name="price" placeholder="prezzo del prodotto">
                    @error('price')
                        <span role="alert"> <strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="categoria">Categoria</label>
                </div>
                <div class="col-75">
                    <select id="categoria"  name="categoria">
                        <option value="australia">cat1</option>
                        <option value="canada">cat2</option>
                        <option value="usa">cat3</option>
                    </select>
                    @error('comp_name')
                        <span role="alert"> <strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="data">Data Inizio Promozione: </label>
                </div>
                <div class="col-75">
                    <input type="text" id="data1" value="{{$promotion->date_start}}" name="data1" placeholder="Data Inizio Promozione">
                    @error('date_start')
                        <span role="alert"> <strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="data">Data Fine Promozione: </label>
                </div>
                <div class="col-75">
                    <input type="text" id="data2" value="{{$promotion->date_end}}" name="data2" placeholder="Data Fine Promozione">
                    @error('date_end')
                        <span role="alert"> <strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="data">Sconto Promozione: </label>
                </div>
                <div class="col-75">
                    <input type="text" id="sconto" value="{{$promotion->discounetPerc}}" name="sconto" placeholder="Inserisci lo sconto Promozione">
                    @error('discountPerc')
                        <span role="alert"> <strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="desc">Descrizione</label>
                </div>
                <div class="col-75">
                    <textarea id="desc" name="desc" value="{{$promotion->desc}}" placeholder="Descrizione del prodotto" style="height:200px"></textarea>
                    @error('desc')
                        <span role="alert"> <strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row1">
                {{-- <a class="btn11" href="">Salva</a> --}}
                <button type="submit">Salva</button>
            </div>
        </form>
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
        background-color: #4caf50;
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
        width: 92%
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
          width: 45%;
          margin-top: 6px;
          margin-left: 3em;
        }
        
        .col-75 {
          float: left;
          width: 85%;
          margin-top: 6px;
          margin-left: 3em;
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
        </style>
 @endsection
