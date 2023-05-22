@extends('layouts.admin')
@section('content')
    <main class="maina">
        <h1>Pagina Amministratore</h1>
        <div class="side_wrapper">
        <section class="about-dev">
          <header class="profile-card_header">
            <div class="profile-card_header-container">
              <h2>Nome : {{ Auth::user()->name }} </h2>
              <h2>Cognome : {{ Auth::user()->surname }} </h2>
            </div>
          </header>
          <div class="profile-card_about">
            <h2>Username : {{ Auth::user()->username }}</h2>
            <h2>Email : {{ Auth::user()->email }}</h2>
            <h2>Eta : {{ Auth::user()->age }}</h2>
            <h2>Genere : {{ Auth::user()->gender }}</h2>
            <h2>Telefono : {{ Auth::user()->phone }}</h2>
            <h2>Ruolo : {{ Auth::user()->role }}</h2>
          </div>
          
        </section>
    </main>
    <script src="js/admin.js"></script>
@endsection