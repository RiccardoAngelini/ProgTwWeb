@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div class="content1-registrazione">
   <div class="container">
      <h2>Registrazione</h2>
      <div class="content-registrazione">
         {{ Form::open(array('route' => 'register')) }}
         <div class="user-details">
            <div class="input-box">
               {{ Form::label('name', 'Name', ['class' => 'details']) }}
               {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome']) }}
               @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('surname', 'Cognome', ['class' => 'details']) }}
               {{ Form::text('surname', null, ['placeholder' => 'Inserisci il cognome']) }}
               @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('username', 'Username', ['class' => 'details']) }}
               {{ Form::text('username', null, ['placeholder' => 'Inserisci l\'username']) }}
               @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('email', 'Email', ['class' => 'details']) }}
               {{ Form::text('email', null, ['placeholder' => 'Inserisci l\'email']) }}
               @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('age', 'Età', ['class' => 'details']) }}
               {{ Form::text('age', null, ['placeholder' => 'Inserisci l\'età']) }}
               @if ($errors->first('age'))
                <ul class="errors">
                    @foreach ($errors->get('age') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('password', 'Password', ['class' => 'details']) }}
               {{ Form::password('password', ['placeholder' => 'Inserici la password']) }}
               @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('phone', 'Telefono', ['class' => 'details']) }}
               {{ Form::text('phone', null, ['placeholder' => 'Numero di telefono']) }}
               @if ($errors->first('phone'))
                <ul class="errors">
                    @foreach ($errors->get('phone') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('password-confirm', 'Conferma Password', ['class' => 'details']) }}
               {{ Form::password('password_confirmation', ['placeholder' => 'Conferma Password']) }}
            </div>
         </div>
         <div class="gender-details">
            
            {{ Form::label('gender', 'Genere', ['class' => 'gender-title']) }}
            <div class="category">
               <div class="uomo">
               {{ Form::radio('gender', 'M', false, ['id' => 'dot-1', 'class' => 'dot-1']) }}
               {{ Form::label('dot-1', 'Uomo', ['class' => 'gender-label', 'for' => 'dot-1']) }}
                
</div>
<div class="donna">

               {{ Form::radio('gender', 'F', false, ['id' => 'dot-2', 'class' => 'dot-2']) }}
               {{ Form::label('dot-2', 'Donna', ['class' => 'gender-label', 'for' => 'dot-2']) }}
</div>
            </div>
         </div>
         <div>
            {{ Form::submit('Registrati',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>

@endsection
