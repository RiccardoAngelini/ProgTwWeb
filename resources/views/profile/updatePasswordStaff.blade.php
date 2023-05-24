@extends('layouts.staff')

@section('title', 'Area Staff')

@section('content')

<a class="btn2" href="{{route('staff')}}" >Back</a>
<div class="content1-registrazione">
   <div class="container">
   
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

<style>
      .btn2 {
        background-color: #ff7a57;
        border: none;
        color: white;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 0.5px 0px;
        cursor: pointer;
        border-radius: 0.3em;
        margin-top: 1em;
        margin-left:50%;
    }
</style>
@endsection