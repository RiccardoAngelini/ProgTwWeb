@extends('layouts.user')

@section('title', 'Area User')

@section('content')
<div class="content1-registrazione">

   <div class="container">
 
      <h2>Modifica Username</h2>
    <div class="content-registrazione">
    @if (session('status'))
       <div class="alert alert-success" role="alert">
         {{ session('status') }}
        </div>
          @elseif (session('error'))
        <div class="alert alert-danger" role="alert">
         {{ session('error') }}
         </div>
     @endif
         {{ Form::open(array('route' => 'newusername.store')) }}
        <div class="user-details">
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
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('newusername', 'Nuovo Username', ['class' => 'details']) }}
               {{ Form::text('newusername', null, ['placeholder' => 'Enter your new username']) }}
               @if ($errors->first('newusername'))
                <ul class="errors">
                    @foreach ($errors->get('newusername') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    <div>
            {{ Form::submit('Modifica',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>


@endsection