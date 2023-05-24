@php
    $class = '';
    $currentRoute = Route::currentRouteName();

    if ($currentRoute === 'aziende'||$currentRoute==='Home') {
        $class = 'img';
    } elseif ($currentRoute === 'azienda') {
        $class = 'img-azienda';
    }
@endphp

<img src="{{ asset('images/companies/' . $imgFile) }}" class="{{ $class }}">
