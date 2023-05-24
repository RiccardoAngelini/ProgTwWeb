@include('helpers.remainingDays', ['expirationDate' => $sel_promId->date_end])



@php
    use Carbon\Carbon;

    $expiration = Carbon::createFromFormat('d/m/Y', $expirationDate);

    if ($expiration->isPast()) {
            $remainingDays = 'Offerta scaduta!';
        } else {
            $remainingTime = $expiration->diff(Carbon::now());
            $remainingDays = $remainingTime->format('%a giorni rimasti');
        }
    
@endphp
@if ($remainingDays !== 'Offerta scaduta!')
    
        <div class="ottieni-coup">
            <a href="{{ route('coupon', [$sel_promId->promo_Id, $scelta_coupon]) }}" target="_blank">
                <button class="button-ottieni">
                    Acquista Coupon
                </button>
            </a>
        </div>
@endif
