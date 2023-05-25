@extends('layouts.admin')
@section('content')

<div class="crud-staff-create">
<div class="button-back2">
<a class="btn2" href="{{route('admin.listastaff')}}">Indietro</a></div>
    <h1>MODIFICA DATI DI UN MEMBRO</h1>
</div>

<div class="content1-registrazione">
    <div class="container-modifica-off">
        <h3>Inserisci i campi da modificare</h3>
{{ Form::open(['route' => ['admin.updateStaff',$staff->id], 'method' => 'POST']) }}
@csrf
 <div class="user-details">
    <div class="input-box">
{{ Form::label('name','Name', ['class'=>'details']) }}
{{ Form::text('name', $staff->name, ['placeholder' => 'Inserisci il nome']) }}
@error('name')
<ul class="errors">          
<li>{{ $message }}</li>
    
</ul>
@enderror
    </div>
<div class="input-box">
{{ Form::label('surname', 'Cognome', ['class' => 'details']) }}
  {{ Form::text('surname',$staff->surname, ['placeholder' => 'Cognome']) }}
@error('surname')
 <ul class="errors">
                 
<li>{{ $message }}</li>
            
</ul>
@enderror
</div>
<div class="input-box">
   {{ Form::label('email', 'Email', ['class' => 'details']) }}
  {{ Form::text('email', $staff->email, ['placeholder' => 'Email']) }}
   @error('email')
    <ul class="errors">
                     
                     <li>{{ $message }}</li>
                
                 </ul>
                 @enderror
                </div>
                 <div class="input-box">
                    {{ Form::label('username', 'Username', ['class' => 'details']) }}
                    {{ Form::text('username', $staff->username, ['placeholder' => 'Username']) }}
                    @error('username')
                     <ul class="errors">
                         
                         <li>{{ $message }}</li>
                    
                     </ul>
                     @enderror
                 </div>
                     <div class="input-box">
                        {{ Form::label('age', 'Age', ['class' => 'details']) }}
                        {{ Form::text('age', $staff->age, ['placeholder' => 'Eta']) }}
                        @error('age')
                         <ul class="errors">
                             
                             <li>{{ $message }}</li>
                        
                         </ul>
                         @enderror
                        </div>
                         <div class="input-box">
                            {{ Form::label('phone', 'Phone', ['class' => 'details']) }}
                            {{ Form::text('phone', $staff->phone, ['placeholder' => 'Telefono']) }}
                            @error('phone')
                             <ul class="errors">
                                 
                                 <li>{{ $message }}</li>
                            
                             </ul>
                             @enderror
                            </div>
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
                            <div class="gender-details"> 
                                {{ Form::label('gender', 'Genere',['class' => 'gender-title']) }}
                                 
                                 <div class="category">
                               <div class="uomo">
                               {{ Form::radio('gender', 'M', $staff->gender=='M', ['id' => 'dot-1', 'class' => 'dot-1']) }}
                               {{ Form::label('dot-1', 'Maschio',['class' => 'gender-label', 'for' => 'dot-2']) }}
                               </div>
                               <div class="donna">
                               {{ Form::radio('gender', 'F',$staff->gender=='F', ['id' => 'dot-2', 'class' => 'dot-2']) }}
                               {{ Form::label('dot-2', 'Femmina',['class' => 'gender-label', 'for' => 'dot-2']) }}
                               </div>
                               </div>
                               </div>
            
                             <div>
                                {{ Form::submit('Modifica',['class' => 'button-login']) }}
                             </div>
                             {{ Form::close() }}
</div>
</div>
@endsection

