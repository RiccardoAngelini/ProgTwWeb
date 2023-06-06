@extends('layouts.user')

@section('title', 'Area User')

@section('content')

<div class="content1-registrazione">
   <div class="container">
   
      <h2>Modifica Email</h2>
    <div class="content-registrazione">
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
         {{ session('error') }}
         </div>
     @endif
         {{ Form::open(array('route' => 'newemail.store')) }}
        <div class="user-details">
            
            <div class="input-box">
               {{ Form::label('old-email', 'Email', ['class' => 'details']) }}
               {{ Form::text('old-email', null, ['placeholder' => 'Inserisci l\'email']) }}
               @error('old-email')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('email', 'Nuova Email', ['class' => 'details']) }}
               {{ Form::text('email', null, ['placeholder' => 'Inserisci la nuova email']) }}
               @error('email')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
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