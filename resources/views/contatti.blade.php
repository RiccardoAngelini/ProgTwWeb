@extends('layouts.public')
@section('content')
<asid
        e class="contatti_indirizzo">
            <h1 > Contatti </h1>

            <div class="contatti_indirizzo_nome">Indirizzo: Via Brecce Bianche, 12, 60131 Ancona </div>
            <div class="contatti_indirizzo_numero">Telefono: 071 220 4708 </div>
        </aside>
        <div class="riga"></div>
        <div class="contatti">
            <p class="contatti_modulo">
                Nella sezione FAQ puoi trovare più velocemente la risposta alle tue domande. 
                Se ci stai scrivendo perché hai riscontrato dei problemi con un'offerta o un codice sconto, ricordati di specificare il titolo o di indicare l'url dell'offerta.
                <h2 class="contatti_compila"> Compila il modulo </h2>
            </p>
        <form action="mailto:coupon@example.com" method="post" enctype="text/plain" class="form">
            <div class="form-group">
            <div class="contatti_indirizzo_nome">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            </div>
            <div class="contatti_campo">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="contatti_text">
            <label for="message">Messaggio:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="contatti_invia">
            <input class="contatti_a_invio" type="submit" value="Invia">
        </div>
        </div>
        </form>
@endsection