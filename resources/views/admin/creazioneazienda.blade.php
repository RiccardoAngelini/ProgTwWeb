@extends('layouts.admin')
@section('content')
<div class="content1-registrazione">                                                                                                
   <div class="container">
      <h2>Inserisci Azienda</h2>
      <div class="content-registrazione">
         {{ Form::open(array('route' => 'register')) }}
         <div class="user-details">
            <div class="input-box">
               {{ Form::label('name', 'Nome azienda', ['class' => 'details']) }}
               {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome azienda']) }}
               @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="input-box">
               {{ Form::label('location', 'Residenza', ['class' => 'details']) }}
               {{ Form::text('location', null, ['placeholder' => 'Inserisci la residenza azienda']) }}
               @if ($errors->first('location'))
                <ul class="errors">
                    @foreach ($errors->get('location') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="input-box0">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', [ 'id' => 'image']) }}
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            {{ Form::submit('Registra azienda',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>

<style>
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.content1-registrazione{
  margin-top: auto;
    padding-bottom: 50px;
    padding-top: 50px;
  display: flex;
  justify-content: center;
  
}
 .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
 .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
.input-box0{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.input-box0 input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  border:none;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #ff7a57;
}
 .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two{
   background: #ff7a57;
   border-color: #d9d9d9;
 }
.radiobtn{
   display: none;
 }
 
 .button{
  height: 100%;
  width: 100%;
  border-radius: 5px;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  cursor: pointer;
  transition: all 0.3s ease;
  background: #ff7a57;
}
 form .button_input {
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: #ff7a57;
   }
 form .button input:hover{
  background: #660000;
  }
  </style>
  @endsection