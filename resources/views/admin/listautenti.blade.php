@extends('layouts.admin')
@section('content')


<div class="lista-header">
   <h2>Lista Utenti </h2>
    <hr>
    <p> Seleziona l'utente da eliminare</p>
   <form action="{{ route('admin.eliminautenti') }}" method="POST">
   @csrf
   @method('DELETE')
   <ul>
           @foreach ($users as $user)
           <li>
               <input type="checkbox" name="user_ids[]" value="{{ $user->id }}">
               {{ $user->name }}
           </li>
           @endforeach
         </ul>       
  
   <button type="submit">Elimina selezionati</button>
</form>









