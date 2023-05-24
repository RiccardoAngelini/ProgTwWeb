@php
    $class = '';
    $currentRoute = Route::currentRouteName();

    if ($currentRoute === 'aziende') {
        $class = 'img';
    } elseif ($currentRoute === 'offerta') {
        $class = 'img-azienda';
    }
@endphp

<img src="{{ asset('images/companies/' . $imgFile) }}" class="{{ $class }}">
