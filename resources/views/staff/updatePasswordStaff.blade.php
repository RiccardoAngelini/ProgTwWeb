@extends('layouts.staff')

@section('title', 'Area Staff')

@section('content')
<div class="button-back2">
<a class="btn2" href="{{route('staff')}}" >Indietro</a></div>
<div class="content1-registrazione">
   <div class="container-modifica-off">
   
      <h2>Modifica Password</h2>
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
         {{ Form::open(array('route' => 'newPasswordStaff.store')) }}
        <div class="user-details">
            
            <div class="input-box">
               {{ Form::label('password', 'Password', ['class' => 'details']) }}
               {{ Form::text('password', null, ['placeholder' => 'Enter your password']) }}
               @error('password')
                <ul class="errors">
                    
                    <li>{{ $message }}</li>
               
                </ul>
                @enderror
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
               {{ Form::label('newpassword', 'Nuova Password', ['class' => 'details']) }}
               {{ Form::text('newpassword', null, ['placeholder' => 'Enter your new password']) }}
               @error('newpassword')
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