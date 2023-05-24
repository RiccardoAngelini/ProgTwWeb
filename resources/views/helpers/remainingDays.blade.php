@php
    use Carbon\Carbon;

    $expiration = Carbon::createFromFormat('d/m/Y', $expirationDate);

    if ($expiration->isPast()) {
            $remainingDays = 'Offerta scaduta!';
        } else {
            $remainingTime = $expiration->diff(Carbon::now());
            $remainingDays = $remainingTime->format('%a giorni rimasti');
        }
        
    $class = '';
    $currentRoute = Route::currentRouteName();

    if ($currentRoute === 'catalogo' || $currentRoute === 'Home'|| $currentRoute === 'catalogo2'||$currentRoute==='catalogo3') {
        $class = 'scadenza';
    } elseif ($currentRoute === 'offerta') {
        $class = 'scadenza2';
    }

@endphp

<div class="{{ $class }}">{{ $remainingDays }}</div>