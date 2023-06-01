@extends('layouts.staff')

@section('scripts')

@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(function () {
        var actionUrl = "{{ route('staff.store') }}";
        var formId = 'storepromotion';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#storepromotion").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
    });
    </script>
    

@endsection

@section('content')


<div class="button-back">

<a class="btn2" href="{{route('staff.index')}}">Indietro</a></div>
<div class="content1-registrazione">  
<div class="container-modifica-off">
    <h1 >Aggiungi una nuova promozione</h1>
    <div class="content-registrazione">


    {{ Form::open(array('route' => 'staff.store','id' => 'storepromotion','files' => true)) }}
    <div class="user-details">

            <div class="input-box">
               {{ Form::label('name', 'Nome prodotto', ['class' => 'details']) }}
               {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome prodotto']) }}
              
            </div>

            
            <div class="input-box">
               {{ Form::label('price', 'Prezzo', ['class' => 'details']) }}
               {{ Form::text('price', null, ['placeholder' => 'Inserisci il prezzo']) }}
              
            </div>

            <div class="input-box">
               {{ Form::label('comp_name', 'Azienda', ['class' => 'details']) }}
               {{ Form::select('comp_name',$companies,null, ['placeholder' => 'Scegli l azienda']) }}
               
            </div>

            <div class="input-box">
              {{ Form::label('discountPerc', 'Sconto', ['class' => 'details']) }}
              {{ Form::text('discountPerc', null, ['placeholder' => 'Inserisci lo sconto']) }}
             
           </div>

           <div class="input-box">
            {{ Form::label('location', 'Locazione', ['class' => 'details']) }}
            {{ Form::text('location', null, ['placeholder' => 'Inserisci la postazione della promozione']) }}
           
         </div>

         <div class="input-box">
            {{ Form::label('metodo_di_fruizione', 'Metodo di fruizione', ['class' => 'details']) }}
            {{ Form::text('metodo_di_fruizione', null, ['placeholder' => 'Inserisci il metodo di fruizione del prodotto']) }}
           
         </div>

            <div class="input-box">
               {{ Form::label('date_start', 'Data inizio promozione :', ['class' => 'details']) }}
               {{ Form::date('date_start', null, ['placeholder' => 'Inserisci la data di inizio']) }}
           
            </div>

            <div class="input-box">
               {{ Form::label('date_end', 'Data fine promozione :', ['class' => 'details']) }}
               {{ Form::date('date_end', null, ['placeholder' => 'Inserisci la data di fine']) }}
             
            </div>

            <div  class="input-box0">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', [ 'id' => 'image']) }}
               
            </div>

            <div class="row1" style="width: 90%; ">
               {{ Form::label('desc', 'Descrizione :', ['class' => 'details']) }}
               {{ Form::textarea('desc', null, ['placeholder' => 'Inserisci la descrizione']) }}
             
                </div>

            {{ Form::submit('Registra promozione',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>

 @endsection
