@extends('layouts.staff')
@section('title', 'Staff')
@section('content')
    <h1 style="text-align: center; margin-top:2em;">PROFILO PERSONALE</h1>
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
        <a class="p" href="">Modifica profilo</a>
      </div>

<style>

.p{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 1em; 
  margin-left: 45%;
  margin-top: 2em;
  
}
h1{
  font-family: 'Lato', sans-serif;
  line-height: 1.5;
}
.about-dev {
  width: 100%;
  max-width: 30rem;
  margin: auto;
  box-shadow: 2px 4px 2px -2px rgba(0, 0, 0, .3), -2px -4px 15px -2px rgba(0, 0, 0, .2);
  animation: profile_in 0.8s;
}
 .profile-card_header {
  background: #eca7a7;
  border-left: 0.625rem solid #97ece1;
  padding: 5em 1.5em 1em;
  text-align: center;
}
.profile-card_header h1 {
  margin-top: 0.8em;
  font-family: 'Oswald', sans-serif;
  font-weight: normal;
  position: relative;
} 
.profile-card_about {
  line-height: 1.5;
  background: #ededed;
  padding: 1.5em 2rem;
  color: #222;
  font-family: 'Lato', sans-serif;
}
@media screen and (max-width: 26em) {
  .side_wrapper {
    min-height: 100vh;
    background: #ededed;
  }
  .about-dev {
    box-shadow: none;
  }
}

@media screen and (min-width: 33em) {
  .side_wrapper {
    margin: 2rem auto;
  }
  .profile-card_header {
    padding: 1.5em 4em 1em;
  }
}

</style>

      
@endsection