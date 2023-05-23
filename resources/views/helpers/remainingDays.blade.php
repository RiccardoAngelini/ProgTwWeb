@php
    $formatDays=date('d/m/Y', strtotime($expirationDate));
    $expirationDate=$formatDays;

    use Carbon\Carbon;

    $expiration = Carbon::createFromFormat('d/m/Y', $expirationDate);

    if ($expiration->isPast()) {
            $remainingDays = 'Offerta scaduta!';
        } else {
            $remainingTime = $expiration->diff(Carbon::now());
            $remainingDays = $remainingTime->format('%a giorni rimasti');
        }
    
@endphp

<div class="scadenza">{{ $remainingDays }}</div>