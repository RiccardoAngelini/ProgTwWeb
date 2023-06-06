@extends('layouts.staff')

@section('title', 'Area Staff')

@section('content')

<div class="button-back2">
<a class="btn2" href="{{route('staff')}}" >Indietro</a></div>
<div class="content1-registrazione">
   <div class="container-modifica-off">
   
      <h2>Modifica Dati Personali</h2>
    <div class="content-registrazione">
          @if (session('error'))
        <div class="alert alert-danger" role="alert">
         {{ session('error') }}
         </div>
     @endif
     {{ Form::open(array('route' => 'newDatiStaff.store')) }}
        <div class="user-details">
            
        <div class="input-box">
               {{ Form::label('name', 'Nome', ['class' => 'details']) }}
               {{ Form::text('name', old('name', $user->name), ['placeholder' => 'Inserisci il nome']) }}
               @error('name')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('surname', 'Cognome', ['class' => 'details']) }}
               {{ Form::text('surname', old('surname', $user->surname), ['placeholder' => 'Inserisci il cognome']) }}
               @error('surname')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('phone', 'Telefono', ['class' => 'details']) }}
               {{ Form::text('phone', old('phone', $user->phone), ['placeholder' => 'Inserisci il numero di telefono']) }}
               @error('phone')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('age', 'Età', ['class' => 'details']) }}
               {{ Form::text('age', old('age', $user->age), ['placeholder' => 'Inserisci l\'età']) }}
               @error('age')
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