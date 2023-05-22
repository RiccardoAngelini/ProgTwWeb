@extends('layouts.admin')
@section('content')



<main class="maina">
        <h1>Lista Utenti </h1>
        <p> Seleziona l'utente da eliminare</p>
        <div class="side_wrapper_utenti">
        <section class="about-dev">
        <form action="{{ route('admin.eliminautenti') }}" method="POST" class="form_utenti">
   @csrf
   @method('DELETE')
   <ul class="lista_utenti">
           @foreach ($users as $user)
           <li>
               <input type="checkbox" name="user_ids[]" value="{{ $user->id }}">
               {{ $user->name }}
           </li>
           @endforeach
         </ul>       
  
   <div  class="elimina_utenti"><button type="submit">Elimina selezionati</button></div>
</form>
          
        </section>
    </main>
    <script src="js/admin.js"></script>
@endsection








