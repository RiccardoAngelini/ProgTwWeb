@extends('layouts.public')

@section('title', 'Login')

@section('content')
<div class="content0">
   <div class="content">
      <div class="text">
         Login
      </div>
      {{ Form::open(array('route' => 'login')) }}
         <div id="Username" class="field">
            {{ Form::text('username', null, ['placeholder' => 'Username','autofocus']) }}
            <span class="fas fa-user"></span>
            {{ Form::label('username', 'Username') }}
         </div>
         @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
         <div id="Password" class="field">
            {{ Form::password('password',['placeholder' => 'Password']) }}
            <span class="fas fa-lock"></span>
            {{ Form::label('password', 'Password') }}
         </div>
         @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
         {{ Form::submit('Login', ['class' => 'button-login']) }}
         <div class="sign-up">
            Sei un membro?
            <a href="{{route('register')}}">Registrati</a>
         </div>
      {{ Form::close() }}
   </div>
</div>

@endsection
