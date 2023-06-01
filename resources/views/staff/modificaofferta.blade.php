@extends('layouts.staff')
@section('content')
<div class="button-back">
    <a class="btn2" href="{{route('staff.index')}}" >Indietro</a></div>
    <div class="content1-registrazione">
<div class="container-modifica-off">
    <h1 >Modifica promozione</h1>
<div class="content-registrazione">
@if (Session::has('success'))
<div class="alert alert-success2" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger2" role="alert">
            {{ Session::get('error')}}
        </div>
    @endif
    {{ Form::open(['route' => ['staff.update', $promotion->promo_Id], 'files'=>true]) }}
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
        {{ Form::select('comp_name',$companies,null, ['placeholder' => 'Scegli l azienda']) }}
        <ul class="errors">
                    @foreach ($errors->get('comp_name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>  
    
    <div class="input-box">
        {{ Form::label('discountPerc', 'Sconto :') }}
        {{ Form::text('discountPerc', old('discountPerc', $promotion->discountPerc),null, ['id' => 'discountPerc']) }}
        <ul class="errors">
                    @foreach ($errors->get('discountPerc') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box">
        {{ Form::label('luogo_di_fruizione', 'Luogo di fruizione :') }}
        {{ Form::text('luogo_di_fruizione', old('luogo_di_fruizione', $promotion->luogo_di_fruizione), ['id' => 'luogo_di_fruizione']) }}
        <ul class="errors">
                    @foreach ($errors->get('luogo_di_fruizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>  
    </div>

    <div class="input-box">
        {{ Form::label('metodo_di_fruizione', 'Metodo di fruizione :') }}
        {{ Form::text('metodo_di_fruizione', old('metodo_di_fruizione', $promotion->metodo_di_fruizione), ['id' => 'metodo_di_fruizione']) }}
        <ul class="errors">
                    @foreach ($errors->get('metodo_di_fruizione') as $message)
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
</div>
</div>
 @endsection
