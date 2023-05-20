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
               {{ Form::text('name', null, ['placeholder' => 'Enter your name']) }}
               @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('username', 'Username', ['class' => 'details']) }}
               {{ Form::text('username', null, ['placeholder' => 'Enter your username']) }}
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
               {{ Form::text('email', null, ['placeholder' => 'Enter your email']) }}
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
               {{ Form::password('password', ['placeholder' => 'Enter your password']) }}
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
         </div>
         <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" class="radiobtn">
            <input type="radio" name="gender" id="dot-2" class="radiobtn">
            <span class="gender-title">Gender</span>
            <div class="category">
               <label for="dot-1">
                  <span class="dot one"></span>
                  <span class="gender">Male</span>
               </label>
               <label for="dot-2">
                  <span class="dot two"></span>
                  <span class="gender">Female</span>
               </label>
            </div>
         </div>
         <div>
            {{ Form::submit('Register',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>

@endsection
