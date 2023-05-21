@extends('layouts.user')

@section('title', 'Area User')

@section('content')

<div class="content1-registrazione">
   <div class="container">
   
      <h2>Modifica Email</h2>
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
         {{ Form::open(array('route' => 'newnamesurname.store')) }}
        <div class="user-details">
            
            <div class="input-box">
               {{ Form::label('name', 'Nome', ['class' => 'details']) }}
               {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome']) }}
               @error('name')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('newname', 'Nuovo Nome', ['class' => 'details']) }}
               {{ Form::text('newname', null, ['placeholder' => 'Inserisci il nuovo nome']) }}
               @error('newname')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('surname', 'Cognome', ['class' => 'details']) }}
               {{ Form::text('surname', null, ['placeholder' => 'Inserisci il cognome']) }}
               @error('surname')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('newsurname', 'Nuovo Cognome', ['class' => 'details']) }}
               {{ Form::text('newsurname', null, ['placeholder' => 'Inserisci il nuovo cognome']) }}
               @error('newsurname')
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