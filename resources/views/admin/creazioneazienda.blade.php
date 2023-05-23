@extends('layouts.admin')
@section('content')
<div class="content1-registrazione">                                                                                                
   <div class="container">
      <h2>Inserisci Azienda</h2>
      <div class="content-registrazione">
         {{ Form::open(array('route' => 'register')) }}
         <div class="user-details">
            <div class="input-box">
               {{ Form::label('name', 'Nome azienda', ['class' => 'details']) }}
               {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome azienda']) }}
               @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('location', 'Residenza', ['class' => 'details']) }}
               {{ Form::text('location', null, ['placeholder' => 'Inserisci la residenza azienda']) }}
               @if ($errors->first('location'))
                <ul class="errors">
                    @foreach ($errors->get('location') as $message)
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
            {{ Form::submit('Registra azienda',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>

  @endsection