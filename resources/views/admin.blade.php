@extends('layouts.admin')
@section('content')
    <main class="maina">
        <h1>Pagina Amministratore</h1>
        <div class="side_wrapper">
        <section class="about-dev">
          <header class="profile-card_header">
            <div class="profile-card_header-container">
              <h3>Nome : {{ Auth::user()->name }} </h3>
              <h3>Cognome : {{ Auth::user()->surname }} </h3>
            </div>
          </header>
          <div class="profile-card_about">
            <h3>Username : {{ Auth::user()->username }}</h3>
            <h3>Email : {{ Auth::user()->email }}</h3>
            <h3>Eta : {{ Auth::user()->age }}</h3>
            <h3>Genere : {{ Auth::user()->gender }}</h3>
            <h3>Telefono : {{ Auth::user()->phone }}</h3>
            <h3>Ruolo : {{ Auth::user()->role }}</h3>
          </div>
          
        </section>
    </main>
@endsection