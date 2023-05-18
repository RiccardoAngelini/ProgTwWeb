@php
    $class = '';
    $currentRoute = Route::currentRouteName();

    if ($currentRoute === 'catalogo' || $currentRoute === 'Home') {
        $class = 'img';
    } elseif ($currentRoute === 'offerta') {
        $class = 'img-offerta';
    }
@endphp

<img src="{{ asset('images/promotions/' . $imgFile) }}" class="{{ $class }}">
