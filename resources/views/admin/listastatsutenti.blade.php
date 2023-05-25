@extends('layouts.admin')
@section('content')


<main class="maina">
    <h1>Lista Utenti</h1>
    <p>Seleziona l'utente</p>
    <div class="side_wrapper_utenti">
        <section class="about-dev-utenti">
                <ul class="lista_utenti">
                    @foreach ($users as $user)
                        <li>
                           
                        <a href="{{ route('coupon.statistiche', ['user_id' => $user->id]) }}">User: {{ $user->id }} - {{ $user->name }} - {{ $user->surname }} - {{ $user->username }} - {{ $user->email }} - {{ $user->phone }}</a>
                        </li>
                    @endforeach
                </ul>
                
        </section>
    </div>
</main>



@endsection