@extends('layouts.admin')

@section('scripts')

@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('newCompany.store') }}";
    var formId = 'addcompany';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addcompany").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
<div class="faq-header"></div>
<div class="button-back2">
<a class="btn2" href="{{route('admin.listaziende')}}">Indietro</a></div>
<div class="content1-registrazione"> 
                                                                                                   
   <div class="container">
      <h2>Inserisci Azienda</h2>
      <div class="content-registrazione">
<!--      @if (Session::has('success'))
<div class="alert alert-success" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
        {{Session::get('success')}}
    </div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger" role="alert" style="display:flex; justify-content:center; margin-left:260px;">
            {{ Session::get('error')}}
        </div>
    @endif-->
         {{ Form::open(array('route' => 'newCompany.store','id' => 'addcompany','files' => true)) }}
         <div class="user-details">
            <div class="input-box">
               {{ Form::label('name', 'Nome azienda', ['class' => 'details']) }}
               {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome azienda']) }}
            </div>
            <div class="input-box">
               {{ Form::label('location', 'Residenza', ['class' => 'details']) }}
               {{ Form::text('location', null, ['placeholder' => 'Inserisci la residenza azienda']) }}
            </div>
            <div class="input-box" style="width: 100%;">
                {{ Form::label('ragione_sociale', 'Ragione Sociale', ['class' => 'details']) }}
                {{ Form::text('ragione_sociale', null, ['placeholder' => 'Inserisci la ragione sociale']) }}
             </div>

             <div class="form-group" style="width: 100%;">
                {{ Form::label('desc', 'Descrizione :',['class' => 'details' ]) }}
                {{ Form::textarea('desc', old('desc'), ['id' => 'desc', 'rows' => 4, 'placeholder' => 'Inserire una descrizione' ]) }}
                <ul class="errors">
                            @foreach ($errors->get('desc') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                </ul>    
            </div>

            <div  class="input-box0">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', [ 'id' => 'image']) }}
            </div>
            {{ Form::submit('Registra azienda',['class' => 'button-login']) }}
         </div>
         {{ Form::close() }}
      </div>
   </div>
</div>

  @endsection