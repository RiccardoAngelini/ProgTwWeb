@extends('layouts.public')
@section('content')
<!--
<div class="content1-registrazione">
  <div class="container">
    <h2>Registrazione</h2>
    <div class="content-registrazione">
        <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details"> Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Età</span>
            <input type="text" placeholder="Inserisci l età" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Telefono</span>
            <input type="text" placeholder="Numero di telefono" required>
          </div>
        </div>
        <div class="gender-details">
          <span class="gender-title">Gender</span>
          <div class="category">
          <input type="radio" name="gender" id="dot-1" class="radiobtn">
          <input type="radio" name="gender" id="dot-2" class="radiobtn">
          
          
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
        <div class="button">
          <input type="submit" value="Register">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>-->

<div class="content1-registrazione">
  <div class="container">
    <h3>Registrazione</h3>
      <div class="content-registrazione">

            {{ Form::open(array('route' => 'registrati', 'class' => 'contact-form')) }}
          <div class="user-details">

            <div  class="input-box">
                {{ Form::label('name', 'Nome', ['class' => 'details']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="input_box">
                {{ Form::label('surname', 'Cognome', ['class' => 'details']) }}
                {{ Form::text('surname', '', ['class' => 'input-box', 'id' => 'surname'])}}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="input_box">
                {{ Form::label('email', 'Email', ['class' => 'details']) }}
                {{ Form::text('email', '', ['class' => 'input_box','id' => 'email'])}}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="input_box">
                {{ Form::label('username', 'Nome Utente', ['class' => 'details']) }}
                {{ Form::text('username', '', ['class' => 'input_box','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="input_box">
                {{ Form::label('password', 'Password', ['class' => 'details']) }}
                {{ Form::password('password', ['class' => 'input_box', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="input-box">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'details']) }}
                {{ Form::password('password_confirmation', ['class' => 'input-box', 'id' => 'password-confirm']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

              <div  class="input-box">
                {{ Form::label('phone', 'Telefono', ['class' => 'details']) }}
                {{ Form::tel('phone') }}
                @if ($errors->first('phone'))
                <ul class="errors">
                    @foreach ($errors->get('tel') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
              </div>
              
                <div  class="input_box">
                  {{ Form::label('age', 'Età', ['class' => 'details']) }}
                    {{ Form::text('age', '', ['class' => 'input_box','id' => 'age']) }}
                    @if ($errors->first('age'))
                    <ul class="errors">
                    @foreach ($errors->get('age') as $message)
                      <li>{{ $message }}</li>
                    @endforeach
                    </ul>
                  @endif
                </div>
            </div>
        <div class="gender-details">
          <span class="gender-title">Genere</span>
          <div class="category">
            <div class="dot one">
            {{ Form::label('male', 'Maschio') }}
              {{ Form::radio('male', 'Maschio', false, ['id' => 'male']) }}
            </div>
            <div class="dot two">
            {{ Form::label('female', 'Femmina') }}
              {{ Form::radio('female', 'Femmina', false,['id' => 'female']) }}
            </div>
            </div>
          </div>
        </div>
            <div class="botton">      
                {{ Form::submit('Registrati', ['class' => 'form-btn1']) }}
            </div>
            {{ Form::close() }}
    </div>
</div>
@endsection