@extends('layouts.public')
@section('title', 'Dove Siamo')
@section('content')
<h3 class="testo">Ci troviamo qui</h3>
    <div class="container-map">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.939933218729!2d13.515312415631946!3d43.58696746472868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d802321a175a5%3A0x3e1261137bd6ae51!2sVia+Brecce+Bianche%2C+12%2C+60131+Ancona%2C+Italy!5e0!3m2!1sen!2sus!4v1454947673841"
                width="100%" 
                height="100%" 
                style="border: 0;" 
                allowfullscreen="" 
                loading="lazy">
        </iframe>
    </div>
    </div>
@endsection