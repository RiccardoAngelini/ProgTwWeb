@extends('layouts.admin')
@section('content')
<main class="maina">
    <h1>Lista Utenti</h1>
    <p>Seleziona l'utente da eliminare</p>
    <div class="side_wrapper_utenti">
        <section class="about-dev">
            {{ Form::open(['route' => 'admin.eliminautenti', 'method' => 'POST', 'class' => 'form_utenti']) }}
                @csrf
                {{ method_field('DELETE') }}
                <ul class="lista_utenti">
                    @foreach ($users as $user)
                        <li>
                            {{ Form::checkbox('user_ids[]', $user->id, false, ['id' => 'user_'.$user->id]) }}
                            {{ Form::label('user_'.$user->id, $user->name) }}
                        </li>
                    @endforeach
                </ul>
                <div class="elimina_utenti">
                    {{ Form::submit('Elimina selezionati', ['class' => 'delete-button']) }}
                </div>
            {{ Form::close() }}
        </section>
    </div>
</main>
<script src="{{ asset('js/admin.js') }}"></script>
@endsection










