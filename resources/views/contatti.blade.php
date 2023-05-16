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


            <div class="container1">
                       <form action="/action_page.php">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Nome</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="nome" name="nome" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Your mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="massage">Messaggio</label>
                        </div>
                        <div class="col-75">
                            <textarea id="massage" name="massage" placeholder="Inserisci il messaggio" style="height:200px"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <input class="submit-button-con" type="submit" value="Invia">
                    </div>
                </form>
                </div>
             
@endsection