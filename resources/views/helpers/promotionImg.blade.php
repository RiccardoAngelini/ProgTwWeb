@php
    $class = '';
    $currentRoute = Route::currentRouteName();

    if ($currentRoute === 'catalogo' || $currentRoute === 'Home'|| $currentRoute === 'catalogo2'||$currentRoute==='catalogo3') {
        $class = 'img';
    } elseif ($currentRoute === 'offerta') {
        $class = 'img-offerta';
    }
@endphp

<img src="{{ asset('images/promotions/' . $imgFile) }}" class="{{ $class }}">
