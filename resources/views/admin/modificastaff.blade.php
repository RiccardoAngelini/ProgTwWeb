@extends('layouts.admin')
@section('content')
<div class="crud-staff-create">
    <h1>MODIFICA DATI DI UN MEMBRO</h1>
</div>

<div class="content1-registrazione">
    <div class="container">
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
                             {{ Form::text('password', $staff->password, ['placeholder' => 'Password']) }}
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
                               <div class="male">
                               {{ Form::radio('gender', 'male', $staff->gender, ['id' => 'dot-1', 'class' => 'dot-1']) }}
                               {{ Form::label('dot-1', 'Maschio',['class' => 'gender-label', 'for' => 'dot-2']) }}
                               </div>
                               <div class="female">
                               {{ Form::radio('gender', 'female',$staff->gender, ['id' => 'dot-2', 'class' => 'dot-2']) }}
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

<!-- il relativo file css -> registrazione.css -->