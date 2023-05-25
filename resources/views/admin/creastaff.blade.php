@extends('layouts.admin')
@section('content')


<div class="crud-staff-create"><h1>AGGIUNGI UN MEMBRO</h1>


   
        
  <div class="content1-registrazione">
    <div class="container">
      <h3>Inserisci i dati del nuovo membro</h3>
      {{ Form::open(['route' => 'admin.create', 'method' => 'POST']) }}
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
 <div class="input-box">
       {{ Form::label('surname', 'Cognome', ['class' => 'details']) }}
          {{ Form::text('surname', null, ['placeholder' => 'Cognome']) }}
       @error('surname')
         <ul class="errors">
                         
       <li>{{ $message }}</li>
                    
      </ul>
      @enderror
 </div>
        <div class="input-box">
           {{ Form::label('email', 'Email', ['class' => 'details']) }}
          {{ Form::text('email', null, ['placeholder' => 'Email']) }}
           @error('email')
            <ul class="errors">
                             
                             <li>{{ $message }}</li>
                        
                         </ul>
                         @enderror
                        </div>
                         <div class="input-box">
                            {{ Form::label('username', 'Username', ['class' => 'details']) }}
                            {{ Form::text('username', null, ['placeholder' => 'Username']) }}
                            @error('username')
                             <ul class="errors">
                                 
                                 <li>{{ $message }}</li>
                            
                             </ul>
                             @enderror
                         </div>
                             <div class="input-box">
                                {{ Form::label('age', 'Age', ['class' => 'details']) }}
                                {{ Form::text('age', null, ['placeholder' => 'Eta']) }}
                                @error('age')
                                 <ul class="errors">
                                     
                                     <li>{{ $message }}</li>
                                
                                 </ul>
                                 @enderror
                                </div>
                                 <div class="input-box">
                                    {{ Form::label('phone', 'Phone', ['class' => 'details']) }}
                                    {{ Form::text('phone', null, ['placeholder' => 'Telefono']) }}
                                    @error('phone')
                                     <ul class="errors">
                                         
                                         <li>{{ $message }}</li>
                                    
                                     </ul>
                                     @enderror
                                    </div>
                                    <div class="input-box">
                                     {{ Form::label('password', 'Password', ['class' => 'details']) }}
                                     {{ Form::text('password', null, ['placeholder' => 'Password']) }}
                                     @error('password')
                                      <ul class="errors">
                                          
                                          <li>{{ $message }}</li>
                                     
                                      </ul>
                                      @enderror
                                    </div>
                                    <div class="input-box">
                                      {{ Form::label('password_confirmation', 'Conferma password', ['class' => 'details']) }}
                                      {{ Form::text( 'password_confirmation', ['placeholder' => 'Password']) }}
                                      @error('password_confirmation')
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
                                     {{ Form::radio('gender', 'M', true, ['id' => 'dot-1', 'class' => 'dot-1']) }}
                                     {{ Form::label('dot-1', 'Maschio',['class' => 'gender-label', 'for' => 'dot-2']) }}
                                     </div>
                                     <div class="female">
                                     {{ Form::radio('gender', 'F', ['id' => 'dot-2', 'class' => 'dot-2']) }}
                                     {{ Form::label('dot-2', 'Femmina',['class' => 'gender-label', 'for' => 'dot-2']) }}
                                     </div>
                                     </div>
                                     </div>
                                     <div>
                                        {{ Form::submit('Crea',['class' => 'button-login']) }}
                                     </div>
                                     {{ Form::close() }}
  </div> 
 </div>
</div>
@endsection
