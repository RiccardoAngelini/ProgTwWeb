@extends('layouts.public')

@section('title', 'Login')

@section('content')
<div class="content0">
      <div class="content">
         <div class="text">
            Login
         </div>
         {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
            <div  class="field">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'field','id' => 'username']) }}
                <span class="fas fa-user"></span>
            </div>
            <div  class="field">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::text('password', '', ['class' => 'field','id' => 'password']) }}
                <span class="fas fa-lock"></span>
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
          <div>                
            {{ Form::submit('Login', ['class' => 'button-login']) }}
            </div>
         <div class="sign-up">
            Se non hai un account 
            <a href="{{route('registrati')}}">Registrati</a>
         </div>
         {{ Form::close() }}
      </div>  
</div> 
@endsection
