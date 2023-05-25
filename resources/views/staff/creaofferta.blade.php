@extends('layouts.staff')
@section('content')
<div class="button-back">
<a class="btn2" href="{{route('staff.index')}}">Indietro</a></div>
<div class="content1-registrazione">  
<div class="container-modifica-off">
    <h1 >Aggiungi una nuova promozione</h1>
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

    {{ Form::open(array('route' => 'staff.store','files' => true)) }}
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
               {{ Form::select('comp_name',$companies,null, ['placeholder' => 'Scegli l azienda']) }}
               @if ($errors->first('comp_name'))
                <ul class="errors">
                    @foreach ($errors->get('comp_name') as $message)
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

 @endsection
